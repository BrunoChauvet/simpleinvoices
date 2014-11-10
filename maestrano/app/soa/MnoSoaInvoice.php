<?php

/**
 * Mno Invoice Class
 */
class MnoSoaInvoice extends MnoSoaBaseInvoice
{
    protected $_local_entity_name = "INVOICES";

    public $_is_new;
    
    protected function pushInvoice() {
      $this->_log->debug(__FUNCTION__ . " start");

      $id = $this->getLocalEntityIdentifier();
      if (empty($id)) { return; }

      $mno_invoice_id = $this->getMnoIdByLocalIdName($id, $this->_local_entity_name);
      $this->_id = ($this->isValidIdentifier($mno_invoice_id)) ? $mno_invoice_id->_id : null;
      $this->_is_new = (empty($this->_id)) ? true : false;

      $this->_transaction_date = strtotime($this->_local_entity['date']);
      $this->_amount->price = getInvoiceTotal($id);
      $this->_amount->taxAmount = $this->_local_entity['total_tax'];

      // Pull Customer Organization or Person
      $mno_org_customer_id = $this->getMnoIdByLocalIdName($this->_local_entity['customer_id'], "ORG_CUSTOMER");
      if(isset($mno_org_customer_id)) {
        $this->_organization_id = $mno_org_customer_id->_id;
      }

      $mno_customer_id = $this->getMnoIdByLocalIdName($this->_local_entity['customer_id'], "CUSTOMER");
      if(isset($mno_customer_id)) {
        $this->_person_id = $mno_customer_id->_id;
      }

      // Pull Invoice lines
      $invoiceItems = invoice::getInvoiceItems($id);
      if(!empty($invoiceItems)) {
        foreach($invoiceItems as $invoiceItem) {
          $invoice_line = array();
          
          // Find mno id if already exists
          $mno_invoice_line_id = $this->getMnoIdByLocalIdName($invoiceItem['id'], "INVOICE_LINE");
          if($this->isDeletedIdentifier($mno_invoice_line_id)) {
            $this->markInvoiceLineForDeletion($mno_invoice_line_id->_id);
            continue;
          } else if (!$this->isValidIdentifier($mno_invoice_line_id)) {
            // Generate and save ID
            $invoice_line_mno_id = uniqid();
            $mno_invoice_line_id = $this->_id . "#" . $invoice_line_mno_id;
            $this->_mno_soa_db_interface->addIdMapEntry($invoiceItem['id'], "INVOICE_LINE", $mno_invoice_line_id, "INVOICE_LINE");
          } else {
            $invoice_line_id_parts = explode("#", $mno_invoice_line_id->_id);
            $invoice_line_mno_id = $invoice_line_id_parts[1];
          }

          // Pull Product
          $local_product_id = $this->push_set_or_delete_value($invoiceItem['product_id']);
          $mno_item_id = $this->getMnoIdByLocalIdName($local_product_id, "ITEMS");
          $invoice_line['item']->id = $mno_item_id->_id;

          // Pull first Tax
          $query = 'SELECT * FROM '.TB_PREFIX.'invoice_item_tax WHERE invoice_item_id = :id LIMIT 1';
          $result = dbQuery($query, ':id', $invoiceItem['id']);
          $row = $result->fetch();
          if($row) {
            $local_tax_id = $this->push_set_or_delete_value($row['tax_id']);
            $mno_tax_id = $this->getMnoIdByLocalIdName($local_tax_id, "TAX");
            $invoice_line['taxCode']->id = $mno_tax_id->_id;
          }

          // Pull attributes
          $invoice_line['id'] = $invoice_line_mno_id;
          $invoice_line['description'] = $invoiceItem['description'];
          $invoice_line['quantity'] = $invoiceItem['quantity'];
          $invoice_line['status'] = 'ACTIVE';

          $invoice_line['unitPrice'] = array();
          $invoice_line['unitPrice']['price'] = $invoiceItem['unit_price'];

          $invoice_line['totalPrice'] = array();
          $invoice_line['totalPrice']['price'] = $invoiceItem['total'];
          $invoice_line['totalPrice']['netAmount'] = $invoiceItem['gross_total'];
          $invoice_line['totalPrice']['taxAmount'] = $invoiceItem['tax_total'];

          $this->_invoice_lines[$invoice_line_mno_id] = $invoice_line;
        }
      }

      $this->_log->debug(__FUNCTION__ . " end");
    }
    
    protected function pullInvoice() {
      $this->_log->debug(__FUNCTION__ . " start");
      
      $return_status = null;
      if (empty($this->_id)) { return constant('MnoSoaBaseEntity::STATUS_ERROR'); }
      
      $local_id = $this->getLocalIdByMnoIdName($this->_id, $this->_mno_entity_name);
      $active = ($this->_status == 'INACTIVE') ? 0 : 1;

      // Skip deleted Items
      if ($active == 0 || $this->isDeletedIdentifier($local_id)) { return constant('MnoSoaBaseEntity::STATUS_DELETED_ID'); }

      if ($this->isValidIdentifier(($local_id))) {
        // Update Invoice
        $return_status = constant('MnoSoaBaseEntity::STATUS_EXISTING_ID'); 
        $this->_local_entity['id'] = $local_id->_id;
      } else {
        // Create new Invoice
        $return_status = constant('MnoSoaBaseEntity::STATUS_NEW_ID');
      }
      $this->_local_entity['date'] = date('Y-m-d', $this->_transaction_date);
      $this->_local_entity['preference_id'] = 1;
      $this->_local_entity['biller_id'] = 1;

      // Map local customer by person or fallback on organization
      if(isset($this->_person_id)) {
        $local_person_id = $this->getLocalIdByMnoIdName($this->_person_id, "PERSONS");
        if ($this->isValidIdentifier($local_person_id)) {
          $this->_local_entity['customer_id'] = $local_person_id->_id;
        } else if ($this->isDeletedIdentifier($local_person_id)) {
          // do not update
        } else {
          // Fetch remote person if missing
          $notification->entity = "persons";
          $notification->id = $this->_person_id;
          $mno_person = new MnoSoaPerson($this->_db, $this->_log);   
          $status = $mno_person->receiveNotification($notification);
          if ($status) {
            $this->_local_entity['customer_id'] = $local_person_id->_id;
          }
        }
      } else if(isset($this->_organization_id)) {
        $local_organization_id = $this->getLocalIdByMnoIdName($this->_organization_id, "ORGANIZATIONS");
        if ($this->isValidIdentifier($local_organization_id)) {
          $this->_local_entity['customer_id'] = $local_organization_id->_id;
        } else if ($this->isDeletedIdentifier($local_organization_id)) {
          // do not update
        } else {
          // Fetch remote organization if missing
          $notification->entity = "organizations";
          $notification->id = $this->_organization_id;
          $mno_organization = new MnoSoaOrganization($this->_db, $this->_log);   
          $status = $mno_organization->receiveNotification($notification);
          if ($status) {
            $this->_local_entity['customer_id'] = $local_organization_id->_id;
          }
        }
      }

      $this->_log->debug(__FUNCTION__ . " end");

      return $return_status;
    }
    
    protected function saveLocalEntity($push_to_maestrano, $status) {
      $this->_log->debug("saving _local_entity=" . json_encode($this->_local_entity));
      if ($status == constant('MnoSoaBaseEntity::STATUS_NEW_ID')) {
        $invoice_local_id = insertInvoiceByObject($this->_local_entity, 2, false);
      } else if ($status == constant('MnoSoaBaseEntity::STATUS_EXISTING_ID')) {
        updateInvoiceByObject($this->_local_entity, $this->getLocalEntityIdentifier(), false);
        $invoice_local_id = $this->getLocalEntityIdentifier();
      }

      $mno_invoice_line = new MnoSoaInvoiceLine($this->_db, $this->_log);
      $mno_invoice_line->saveLocalEntity($invoice_local_id, $this->_id, $this->_invoice_lines, $push_to_maestrano);
    }
    
    public function getLocalEntityIdentifier() {
        return $this->_local_entity['id'];
    }

    public function markInvoiceLineForDeletion($invoice_line_id) {
      $mno_invoice_line = new MnoSoaInvoiceLine($this->_db, $this->_log);
      $mno_invoice_line->sendDeleteNotification($invoice_line_id);

      $mno_entity = $this->getMnoIdByLocalIdName($invoice_line_id, "INVOICE_LINE");
      $invoice_line_mno_id = $mno_entity->_id;
      
      $invoice_line = array();
      $invoice_line['id'] = $invoice_line_mno_id;
      $invoice_line['status'] = 'INACTIVE';
      $this->_invoice_lines[$invoice_line_mno_id] = $invoice_line;
    }
}

?>