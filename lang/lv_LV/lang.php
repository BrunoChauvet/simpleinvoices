<?php

/*
* Script: latviesu_latvian.inc.php
* 	Latviesu valodas tulkojums
*
* Authors:
*	 Iveta N. Thetford
*
* Last edited:
*    2007-12-22
*
* License:
*	 GPL v2 or above
*/

/*// 1 means that the variable has been translated and // zero means it hasnt been translated - this is used by a script to calculate how much of each file has been done
regex :%s/;/ /1/;// 1\/\/1/g - remove the spaces
 */

#all
$title = "Simple Invoices";//0

$LANG['about'] = "Par mums";//1
$LANG['account_info'] = "Rēķina info";//1
$LANG['actions'] = "Darbība";//1
$LANG['add'] = "Add";//0
$LANG['add_biller'] = "Pievienot kreditoru";//1
$LANG['add_customer'] = "Pievienot klientu";//1
$LANG['add_invoice_item'] = "Add Invoice Item";//0
$LANG['add_invoice_preference'] = "Add Invoice Preference";//0
$LANG['add_item'] = "Pievienot ierakstu";//1
$LANG['add_new_biller'] = "Pievienot jaunu kreditoru";//1
$LANG['add_new_invoice'] = "Pievienot jaunu pavadzīmi";//1
$LANG['add_new_payment_type'] = "Pievienot jaunu maksājuma veidu";//1
$LANG['add_new_preference'] = "Add New Invoice Preference";//0
$LANG['add_new_product'] = "Pievienot jaunu produktu";//1
$LANG['add_new_tax_rate'] = "Pievienot jaunu nodokli";//1
$LANG['add_payment_type'] = "Pievienot maksājuma veidu";//1
$LANG['add_product'] = "Pievienot produktu";//1
$LANG['add_tax_rate'] = "Pievienot nodokli";//1
$LANG['address'] = "Adrese";//1
$LANG['address_city'] = "Adrese: pilsēta";//1
$LANG['address_country'] = "Adrese: valsts";//1
$LANG['address_state'] = "Adrese: rajons/novads";//1
$LANG['address_street'] = "Adrese: iela";//1
$LANG['address_zip'] = "Adrese: pasta kods";//1
$LANG['age'] = "Vecums";//1
$LANG['aging'] = "Novecojis";//0
$LANG['all_reports'] = "All reports";//0
$LANG['amount'] = "Summa";//1
$LANG['as_template'] = "as template";//0
$LANG['attention_short'] = "Uzm.";//0
$LANG['attribute'] = "Attribute";//0
$LANG['attribute_short'] = "Attr";//0
$LANG['back'] = "Back";//0
$LANG['backup_database'] = "Izveidot datu bāzes rezerves kopiju";//1
$LANG['before_starting'] = "There are just a couple of things to do before you can start invoicing";//0
$LANG['biller'] = "Kreditors";//1
$LANG['biller_details'] = "Kreditora info";//1
$LANG['biller_edit'] = "Labot kreditoru";//1
$LANG['biller_id'] = "Kreditora ID";//1
$LANG['biller_name'] = "Kreditora vārds";//1
$LANG['biller_sales'] = "Biller Sales";//0
$LANG['biller_sales_by_customer_totals'] = "Biller Sales by Customer - Totals";//0
$LANG['biller_sales_total'] = "Biller Sales - Total";//0
$LANG['biller_to_add'] = "Pievienot kreditoru";//1
$LANG['billers'] = "Kreditori";//1
$LANG['cancel'] = "Atcelt";//1
$LANG['change_log'] = "Izmaiņu logs";//1
$LANG['city'] = "Pilsēta";//1
$LANG['consulting'] = "Konsultācijas";//1
$LANG['consulting_style'] = "Konsultācijas veidne";//1
$LANG['country'] = "Valsts";//1
$LANG['create_invoice'] ="Izveidot pavadzīmi";//1
$LANG['credits'] = "Kredīts";//1
$LANG['currency_sign'] = "Valūtas zīme";//1
$LANG['custom_field'] = "Custom field";//0
$LANG['Custom_Fields'] = "Custom Fields";//0
$LANG['custom_field_db_field_name'] = "Datubāzes laukuma nosaukums";//1
$LANG['custom_field1'] = "Custom field 1";//0
$LANG['custom_field2'] = "Custom field 2";//0
$LANG['custom_field3'] = "Custom field 3";//0
$LANG['custom_field4'] = "Custom field 4";//0
$LANG['custom_fields'] = "Custom fields";//0
$LANG['custom_fields_upper'] = "Custom Fields";//0
$LANG['custom_label'] = "Custom label";//0
$LANG['customer'] = "Klients";//1
$LANG['customer_account'] = "Klienta konts";//1
$LANG['customer_add'] = "Pievienot jaunu klientu";//1
$LANG['customer_contact'] = "Klienta kontaktpersona (Uzm.)";//1
$LANG['customer_details'] = "Klienta info";//1
$LANG['customer_edit'] = "Labot klientu";//1
$LANG['customer_id'] = "Klienta ID";//1
$LANG['customer_name'] = "Klienta vārds";//1
$LANG['customer_short'] = "Cust";//0
$LANG['customer_type'] = "Type";//1
$LANG['customers'] = "Klienti";//1
$LANG['dashboard'] = "Dashboard";//0$LANG['database_log'] = "Database Log";//0
$LANG['database_upgrade_manager'] = "Database Upgrade Manager";//0
$LANG['date'] = "datums";//1
$LANG['date_created'] = "Datums kad izveidots";//1
$LANG['date_formatted'] = "Datums (YYYY-MM-DD)";//0
$LANG['date_upper'] = "Datums";//1
$LANG['days'] = "dienas";//1
$LANG['debtors'] = "Debitori";//1
$LANG['debtors_by_aging_periods'] = "Debtors by Aging periods";//0
$LANG['debtors_by_amount_owed'] = "Debtors by amount owed";//0
$LANG['default_biller'] = "Noklusētais kreditors";//1
$LANG['default_customer'] = "Noklusētais klients";//1
$LANG['default_inv_template'] = "Noklusētā pavadzīmes veidne";//1
$LANG['default_invoice_preference'] = "Default Invoice Preference";//0
$LANG['default_number_items'] = "Default number of line items";//0
$LANG['default_payment_type'] = "Noklusetais maksajuma veids";//1
$LANG['default_tax'] = "Noklusētais nodoklis";//1
$LANG['delete'] = "Izdzēst";//1
$LANG['denied_page'] = "You are not allowed to view this page";//0
$LANG['description'] = "Paskaidrojums";//1
$LANG['description_short'] = "Desc";//0
$LANG['details'] = "Papildus info";//1
$LANG['disabled'] = "Atslēgts";//1
$LANG['edit'] = "Labot";//1
$LANG['edit_view_tooltip'] = "Labot";//1
$LANG['email'] = "E-pasts";//1
$LANG['email_bcc'] = "Email BCC (Blind Carbon Copy)";//0
$LANG['email_from'] = "Email From";//0
$LANG['email_to'] = "Email To";//0
$LANG['email_quick'] = "Īsais e-pasts";//1
$LANG['enabled'] = "Iedarbinats";//1
$LANG['export_as'] = "Eksportēt kā";//1
$LANG['export_doc'] = "Export to DOC";//0
$LANG['export_doc_tooltip'] = "to a word processor as";//0
$LANG['export_pdf'] = "Eksportēt kā PDF";//1
$LANG['export_pdf_tooltip'] = "PDF formātā";//1
$LANG['export_tooltip'] = "Eksportēt";//1
$LANG['export_xls'] = "Export to XLS";//0
$LANG['export_xls_tooltip'] = "to a spreadsheet as";//0
$LANG['extensions'] = "Extensions";//0
$LANG['faqs'] = "Biežāk uzdotie jautājumi";//1
$LANG['faqs_how'] ="Kā izveidot pavadzīmi?";//1
$LANG['faqs_need'] ="Kas man ir vajadzīgs lai es varu izsūtīt pavadzīmi?";//1
$LANG['faqs_type'] ="Kāda veida pavadzīmes ir pieejamas?";//1
$LANG['faqs_what'] ="Kas ir Simple Invoices?";//1
$LANG['fax'] = "Fax";//1
$LANG['financial_status'] = "Financial status";//0
$LANG['format_tooltip'] = "formāts";//1
$LANG['for'] = "for";//0
$LANG['from'] = "From";//0
$LANG['fwrite_error'] = "Did you get fwrite errors?";//0
$LANG['get_help'] = "Palīdzība";//1
$LANG['getting_started'] ="Uzsākot darbu";//1
$LANG['gross_total'] = "Gross";//0
$LANG['help'] = "Palidzība";//1
$LANG['help_age'] = "The 'Age' field indicates how long the invoice has been unpaid for. If the invoice was created on the 1st of the month, at the 21st of that month if the invoice still had not been made in full the invoice 'Age' would be 21 days.<br /><br />If the invoice has been paid in full then the 'Age' field will be blank.";//0
$LANG['help_backup_database'] = "For the backup to work the webserver user(hopefully your running Apache) must have read/write permissions to the database_backups directory in the Simple Invoices folder<br /><br />Also if you are extra paranoid (like me :) ) about your data I recommend using phpMyAdmin.  This backup script should work fine but if require 'enterprise grade' backup reliability phpMyAdmin rocks.<br /><br />Note: If you are using Simple Invoices in the demo environment on SourceForge, backups won't work due to setup of their servers.";//0
$LANG['help_backup_database_fwrite'] = "<b>Got fwrite() errors?</b><br />If you received fwrite() errors when atempting to backup your Simple Invoices database this means that the webserver user(hopefully your running Apache) doesn't have read/write permissions to the tmp/database_backups directory in the Simple Invoices folder<br /><br />Please change the permissions on this directory and attempt the backup again.  To change the permissions of the tmp/database_backups directory in Unix/Linix/OSX cd to the Simple Invoice directory (<i>cd /var/www/html/simpleinvoices</i>) and then issue the chmod command to give the webserver user read/write permissions (<i>chmod -Rv 777 tmp/database_backups</i>)";//0
$LANG['help_custom_fields'] = "This field is a 'Custom Field'. This means that the label can be defined as whatever you want (ie. Barcode, Tax number, MSN, etc...). <br /><br />To edit or view existing 'Custom Fields' please select the Custom Fields option from the Options menu.";//0
$LANG['help_customer_contact'] = "The 'Attn.' or Customer Contact field allow you to specify a contact within your customers business.<br /><br />This is usefull if you customer has many employees and you need to directly specify on the invoice who within your customers business this invoice is for.<br /><br /> ie. Within the customer 'Springfield Power Plant'  you may want to specify Mr Burns (or Smithers) as the customer contact as they are the person who gets the invoice.<br /><br />So an Invoice will look like <br /><br />Customer: Springfield Power Plant<br />Attn.: Mr Burns<br />";//0
$LANG['help_database_patches'] = "<b>Database patches need to be applied</b><br />There are database patches that need to be applied, please select 'Database Upgrade Manager' from the Options menu and follow the instructions.<br /><br />The 'Database Upgrade Manager' is how Simple Invocies manages modification to the structure of the Simple Invoices database. With each new release there may be 'Database patches' that need to be applied. Database Upgrade Manage looks after these database patches.<br /><br />Database patches are individual modifications to the Simple Invoices database. With a new release there may be multiple patches that need to be applied.";//0
$LANG['help_default_invoice_template_text'] = "<b>Note</b><br />The value you enter into the detault invoice template MUST be the actual folder name of the template you wish to select.  The invoice templates folders are located in (./templates/invoices/)<br /><br />";//0
$LANG['help_delete'] = "By enabling Delete, you will be able to delete any invoices you no longer want via the Quick View of that invoice.<br /><br />To delete an invoice, enable this option, then go to the Manage Invoice page and select the Quick View for the invoice you wish to delete.  In the Quick View screen there will now be a delete option in the actions menu.  Click this button and follow the prompts - Your invoice will now be deleted.<br /><br />Note: Currently only invoices can be deleted, but in the near future this will be extended to all the other sections (ie. billers, customers, etc..)";//0
$LANG['help_email_bcc'] = "This field is not mandatory and gets the default value from the Billers email address.<br /><br />Its recommended that you BCC yourself onto this email so that you also get a copy of it.  This way you know for sure that the email has been correctly sent and you always have a backup copy of the email.<br /><br /><i>Note: You can add multiple email addresses here - just use eith , or ; to split the addresses</i>";//0
$LANG['help_email_cc'] = "This field is not mandatory.  Here you can specify any email address you want to CC but cannot add more than 1 email address in this field<br /><br /><i>Note: You can add multiple email addresses here - just use eith , or ; to split the addresses</i>";//0
$LANG['help_email_from'] = "This field is a mandatory field and gets the default value from the Billers email address.  You can change this email address as you require but cannot add more than 1 email address in this field<br /><br /><i>Note: There can be only 1 email address in this field</i>";//0
$LANG['help_email_to'] = "This field is a mandatory field and gets the default value from the Customers email address.  You can change this email address as you require<br /><br /><i>Note: You can add multiple email addresses here - just use either , or ; to split the addresses</i>";//0
$LANG['help_insert_biller_text'] = "To select no logo please select '_default_blank_logo.png' from the list.<br /><br />To add additional logos into Simple Invoices, copy the logo file into the logo directory in the Simple Invoices folder.";//0
$LANG['help_inv_pref_currency_sign'] = "This is the curreny symbol that will be used through-out the invoice.";//0
$LANG['help_inv_pref_description'] = "This is the name of the set of preference - its not used on the invoice itself, just in the creation of the invoice when you select from the drop down list which Invoice Preference you wish to use.";//0
$LANG['help_inv_pref_invoice_detail_heading'] = "This is what will appear as the heading of the footer/details section of the invoice.";//0
$LANG['help_inv_pref_invoice_detail_line'] = "This is the text that appear under the details/footer heading. Normally used to define payment termns etc.";//0
$LANG['help_inv_pref_invoice_enabled'] = "This allows you to specify if the 'Invoice Preference' is enabled or disabled. If the 'Invoice Preference' is disabled then you will no longer be able to select it during the creation of a new invoice.";//0
$LANG['help_inv_pref_invoice_heading'] = "This is the heading of the invoice and will be displayed at the top of the invoice.";//0
$LANG['help_inv_pref_invoice_payment_method'] = "This is the where you specify how you would like the customer to pay you, ie Cheque/money order/electronic funds transfer/etc.";//0
$LANG['help_inv_pref_invoice_wording'] = "This is what the wording of the invoice will be - ie if you enter Quote - in the Manage Invoices screen it'll say Quote in the invoice type field and through that invoice it'll say Quote instead of invoice ie. Quote ID, Quote Date, etc..";//0
$LANG['help_inv_pref_payment_line1_name'] = "This is where you can specify the payment line 1 name i.e. 'Account name'.";//0
$LANG['help_inv_pref_payment_line1_value'] = "This is where you can specify the payment line 1 value i.e. The name of your back account - 'H. & M. Simpson'.";//0
$LANG['help_inv_pref_payment_line2_name'] = "This is where you can specify the payment line 2 name i.e. 'Account number'.";//0
$LANG['help_inv_pref_payment_line2_value'] = "This is where you can specify the payment line 2 name i.e. Account number '0123-4567-89'.";//0
$LANG['help_inv_pref_what_the'] = "Invoice Preferences allows you to define the wording of the invoice.  You can have as many different 'Invoice Preferences' defined in Simple Invoices as you want, but you can only select 1 'Invoice Preference' per invoice.<br /><br />ie. If you wanted the heading of the invoice to say 'Moes Tavern - Invoice' instead of the default 'Invoice', you can edit the 'Invoice heading' field in the relevant Invoice Preference to achieve this result";//0
$LANG['help_invoice_create'] = "Creating invoices is easy.  Once a biller and customer have been entered into Simple Invoices all you need to do is select an invoice type from the 'Invoice +' menu, fill in the details and click 'Save Invoice'.";//0
$LANG['help_invoice_custom_fields'] = "Need more fields in the invoice screen? Want your own fields like 'Purchase Order', 'Project name' etc..<br /><br />Simple Invoices allows you to add whatever fields you want into the invoices.  These are called 'custom fields', to edit or setup your own fields select Custom Fields from the Options menu.";//0
$LANG['help_invoice_types'] = "In Simple Invoices there are 3 types of invoices available<br /><br />A <b>Total Invoice</b> is an invoice that - think an invoice from a plumber that lists the actions and then has one price and the tax associated.<br/ ><br />An <b>Itemised Invoice</b> is an invoice that list many different items in the same invoice - think a grocery store invoice.<br /><br />A <b>Consulting Invoice</b> is an invoice that is similar to the intemised style except that with each line item there is a detail description of the work performed/product sold - think accounting/legal firms invoices.";//0
$LANG['help_logging'] = "To log actions performed in Simple Invoices enable this option. This creates a log in the database of what actions were performed.<br /><br />Note: At the moment the only way to view the log is in the database, soon we'll incorparte a nice log viewer into Simple Invoices.";//0
$LANG['help_manage_custom_fields'] = "Custom Fielsd are special fields that you can label as whatever you need.<br /><br />This page allows you to define upto 4 custom fields for each of the following: products, customers, billers, and invoices.<br /><br />Once you define a label of one of the fields, this field will become availble for use.  Ie. if you edit 'Invoice :: Custom field 1' and set the label as 'Project name', the next time you create an invoice there'll be a new field in the invoice screen called 'Project name'";//0
$LANG['help_mysql4'] = "As you are using MySQL 4 or below as your database server some features of Simple Invoices have been disabled. Some sql queries in Simple Invoices have taken advantage of new features in MySQL 5, so things like the quick reports here on the start page, some debtors reports and a few other features of Simple Invoices have been disabled.";//0
$LANG['help_new_password'] = "If you want to change the user password fill in this field.<br /><br />NOTE: if you don't want to change the user password just leave this field blank.";//0
$LANG['help_process_payment_auto_amount'] = "The value in the <b>Amount</b> field automatically defaults to the amount owed for the selected invoice. This field is editable and you can change the amount to the actual amount received.<br /><br />This field defaults to the amount owed as the most common payment amount to be processed is the same as the amount owed.";//0
$LANG['help_process_payment_details'] = "Once an invoice has been selected in the 'Invoice ID' field, the biller name, customer name. total of the invoice, amount already paid and the amount outstanding will be displayed in the 'Details' section of the Process Payment screen.<br /><br />If you don't see any information in the 'Details' section either you haven't selected a valid invoice in the 'Invoice ID' or you have not entered the invoice ID correctly. Please refer to Invoice ID on this page on how to enter the invoice ID correctly.";//0
$LANG['help_process_payment_inv_id'] = "To select an invoice to process a payment against please enter the invoice number in the 'Invoice ID' field. This field is an 'auto-complete' field which means that say if you have 12 invoices in your database, when you enter '1' into this field it will return a drop down list of all the invoices with '1' in its <b>Invoice ID</b>.<br /><br />So invoices 1,10,11, and 12 will be returned if you enter '1'. To select the required invoice either use the navigations keys on your keyboard and click enter on the invoice of use your mouse and click on the invoice.<br /><br />Once an invoice has been selected using the above process all the details for this invoice will be displayed in the 'Details' section of the Process Payment screen.";//0
$LANG['help_reports_xsl'] = "<b>Report errors</b><br />If you received a 'OOOOPS, THERE'S AN ERROR HERE.' error when you attempted to run a report in Simple Invoices this means that your version of PHP doesn't have the correct extentions installed(or enabled).<br /><br />If your running a Windows server and using WAMP5 please refer to the page on the Simple Invoices wiki for information on how to fix this http://simpleinvoices.org/wiki/doku.php?id=how_to_i_get_reports_working_in_windows_wamp5<br /><br />If your running Unix/Linux and PHP5 please make sure you have the xsl extension installed and enabled in your php.ini. On Ubuntu GNU/Linux please install the php-xsl package for PHP5 <br /><br />If your using PHP4 please make sure that your PHP has Sablotron support '--enable-xslt'<br /><br />Note: If you are using Simple Invoices in the demo environment on SourceForge reports won't work due to setup of their servers.";//0
$LANG['help_required_field'] = "This is a mandatory field.  You have to enter a value in this field before you can save the form<br /><br />";//0
$LANG['help_simple_invoices'] = "Simple Invoices is a basic invoicing system designed with simplicity and functionality in mind. Catering for the neds of small organisations and home users.<br /><br />For more information please refer to the Simple Invoices website:<a href='http://www.simpleinvoices.org' target='_blank'> <b>http://www.simpleinvoices.org</b></a>";//0
$LANG['help_street2'] = "The field 'Street Address 2' is used when the street address for the biller or customer is either to long to fit one one line or contains multiple parts.<br /><br />ie. the street address 'Level 234, 325 South Malvern Road' can be seperated into <br /><br />Street: Level 234<br />Street Address 2: 325 South Malvern Road";//0
$LANG['help_tax_rate_sign'] = "A tax can be either a percentage based (ie. Sales Tax 10%) or a flat money values (ie. $10 or £20).<br /><br />The $ in the drop down only indicates that this will be a flat money rate and it doesnt indicate the currency symbol. The 'invoice preference' that you use dictates what the currency symbol will be in your invoices.";//0
$LANG['help_text'] = "<b>Warning</b><br /><br />Please backup your Simple Invoices database before running the database update, just incase anything bad happens.<br /><br />To backup the database, select 'Backup Database' from the Options menu, or use phpMyAdmin(if you have this installed) to back up the database.";//0
$LANG['help_user_role'] = "There are 3 roles available <br /><br />Administrator:<br />which has access to all of Simple Invoices<br /><br />User:<br />which has read/write acess to all of Simple Invoices but with no access to the Settings menu <br /><br />Viewer:<br />which has read-only version of User.";//0
$LANG['help_what_are_custom_fields'] = "Custom Fields are special fields in billers, products, customers, and invoices that you can label as whatever you want.<br /><br />Whish there was a Tax ID field in biller, just go to the Custom Fields page and define one of the blank Biller Custom Fields as Tax ID.<br /><br />Now when you go to edit a Biller there'll be a new field there called Tax ID or whatever you specified it as.";//0
$LANG['help_wheres_the_edit_button'] = "In the Manage Payment screen there is no 'Edit' button. This is to provide a proper 'audit trail' of payments recorded in Simple Invoices.<br /><br />If you've made a mistake with a payment entry the best option is to reverse the entry and entery it again correctly<br /><br />Reverse the entry - what the?<br /> This basically mean just doing a negative entry for the same amount as the original entry.<br /><br />ie.<br />If your entered $110<br />but you should of entered $1100<br />to reverse this entry enter -$110 against the same invoice and then enter the correct amount of $1100";//0
$LANG['hide_details'] = "Noslēpt papildus info";//1
$LANG['home'] = "Sākums";//1
$LANG['id'] = "ID";//1
$LANG['ie_10_for_10'] = "* piem. 10 par 10%";//1
$LANG['included'] = "iekļauts";//1
$LANG['insert_biller'] = "Pievienot kreditoru";//1
$LANG['insert_customer'] = "Pievienot klientu";//1
$LANG['insert_payment_type'] = "Pievienot maksājuma veidu";//1
$LANG['insert_preference'] = "Insert Preference";//0
$LANG['insert_product'] = "Pievienot produktu";//1
$LANG['insert_tax_rate'] = "Pievienot nodokli";//1
$LANG['installation'] = "Instalācija";//1
$LANG['inv'] = "Pavadzīme";//1
$LANG['inv_consulting'] = " - Konsultācija";//1
$LANG['inv_itemised'] = " - Itemised";//0
$LANG['inv_pref'] = "Invoice Preference";//0
$LANG['inv_pref_short'] = "Pref";//0
$LANG['inv_total'] = " - Kopā";//1
$LANG['invoice'] = "Pavadzīme";//1
$LANG['invoice_create'] = "Invoice Create";//0
$LANG['invoice_detail_heading'] = "Invoice detail heading";//0
$LANG['invoice_detail_line'] = "Invoice detail line";//0
$LANG['invoice_footer'] = "Invoice footer";//0
$LANG['invoice_heading'] = "Invoice heading";//0
$LANG['invoice_id'] = "Pavadzīmes ID";//1
$LANG['invoice_listings'] = "Invoice listing";//0
$LANG['invoice_payment_line_1_name'] = "Invoice payment line 1 name";//0
$LANG['invoice_payment_line_1_value'] = "Invoice payment line 1 value";//0
$LANG['invoice_payment_line_2_name'] = "Invoice payment line 2 name";//0
$LANG['invoice_payment_line_2_value'] = "Invoice payment line 2 value";//0
$LANG['invoice_payment_method'] = "Pavadzīmes norēķina veids";//1
$LANG['invoice_preference_to_add'] = "Invoice preference to add";//0
$LANG['invoice_preferences'] = "Invoice Preferences";//0
$LANG['invoice_start'] = "Invoice Start";//0
$LANG['invoice_summary'] = "Invoice Summary";//0
$LANG['invoice_type'] = "Veids";//1
$LANG['invoice_wording'] = "Invoice wording";//0
$LANG['invoices'] = "Pavadzīmes";//1
$LANG['item'] = "Item";//0
$LANG['itemised'] = "Itemised";//0
$LANG['itemised_style'] = "Itemised style";//0
$LANG['language'] = "Valoda";//1
$LANG['license'] = "Licenze";//1
$LANG['logging'] = "Logging";//0
$LANG['login'] = "Autorizēties";//1
$LANG['logo_file'] = "Logo fails";//1
$LANG['Logo_File'] = "Logo File";//0
$LANG['logout'] = "Iziet";//1
$LANG['manage'] = "Pārvaldīt";//1
$LANG['manage_billers'] = "Pārvaldīt kreditorus";//1
$LANG['manage_custom_fields'] = "Manage Custom Fields";//0
$LANG['manage_customers'] = "Pārvaldīt klientus";//1
$LANG['manage_data'] ="Pārvaldīt savus datus";//1
$LANG['manage_existing_invoice'] ="Pārvaldīt savas esošās pavadzīmes";//1
$LANG['manage_invoice_preferences'] = "Manage Invoice Preferences";//0
$LANG['manage_invoices'] = "Pārvaldīt pavadzīmes";//1
$LANG['manage_payment_types'] = "Pārvaldīt norēķina veidus";//1
$LANG['manage_payments'] = "Pārvaldīt norēķinus";//1
$LANG['manage_preferences'] = "Manage Preferences";//0
$LANG['manage_products'] = "Pārvaldīt produktus";//1
$LANG['manage_tax_rates'] = "Pārvaldīt nodokļus";//1
$LANG['mandatory_fields'] = "All fields are mandatory";//0
$LANG['message'] = "Message";//0
$LANG['mobile_phone'] = "Mobīlais telefons";//1
$LANG['mobile_short'] = "Mob.";//1
$LANG['monthly_sales_per_year'] = "Monthly Sales and Payments per year";//0
$LANG['money'] = "Money";//0
$LANG['name'] = "Name";//0
$LANG['new_invoice'] = "New invoice";//0
$LANG['new_invoice_consulting'] = "Jauna pavadzīme - Konsultācija";//1
$LANG['new_invoice_itemised'] = "Jauna pavadzīme - Uzskaite";//1
$LANG['new_invoice_total'] = "Jauna pavadzīme - kopsumma";//1
$LANG['new_password'] = "New password";//0
$LANG['no_billers'] = "There have been no billers created. Click the 'Add New Biller' button above to create one";//0
$LANG['no_customers'] = "There have been no customers created.  Click the 'Add New Customer' buttom above to create one";//0
$LANG['no_defaults'] = "There are no defaults";//0
$LANG['no_invoices'] = "There have been no invoices created. Click the 'Add a new Invoice' button above to create an invoice";//0
$LANG['no_help_page'] = "There is no help page created for the requested topic";//0
$LANG['no_payment_types'] = "There have been no payment types created.  Click the 'Add New Payment Type' button above to create one";//0
$LANG['no_payments'] = "There are no payments recorded. Click the 'Process Payment' button above to enter a payment received";//0
$LANG['no_preferences'] = "There have been no invoice preferences created.  Click the 'Add Invoice Preference' button above to create one";//0
$LANG['no_products'] = "There have been no products created. Click the 'Add New Product' button above to create one";//0
$LANG['no_tax_rates'] = "There have been no tax rates created.  Click the 'Add New Tax Rate' button above to create one";//0
$LANG['no_users'] = "There have been no users created. Click the 'Add User' button above to create one";//0
$LANG['none'] = "none";//0
$LANG['note'] = "Papildus info";//1
$LANG['notes'] = "Papildus info";//1
$LANG['notes_opt'] = "Papildus info (neobligāts)";//1
$LANG['number_of_taxes_per_line_item'] = "Number of taxes per line item";//0
$LANG['number_short'] = "Nr.";//1
$LANG['optional'] = "neobligāts";//1
$LANG['options'] = "Neobligāts";//1
$LANG['Other'] = "Other";//0
$LANG['owing'] = "Parādā";//1
$LANG['paid'] = "Nomaksāts";//1
$LANG['password'] = "Password";//0
$LANG['payment_id'] = "Nomaksas ID";//1
$LANG['payment_type'] = "Nomaksas veids";//0
$LANG['payment_type_description'] = "Payment type description";//0
$LANG['payment_type_details'] = "Nomaksas veida info";//1
$LANG['payment_type_edit'] = "Labot nomaksas veidu";//1
$LANG['payment_type_id'] = "Nomaksas veida ID";//1
$LANG['payment_type_method'] = "Nomaksas veids/metode";//1
$LANG['payment_type_to_add'] = "Payment type to add";//0
$LANG['payment_types'] = "Nomaksas veidi";//1
$LANG['payments'] = "Nomaksas";//1
$LANG['payments_filtered'] = "Payments filtered by Invoice ID";//0
$LANG['payments_filtered_customer'] = "Payments filtered by customer";//0
$LANG['payments_filtered_invoice'] = "Process Payment for this Invoice";//0
$LANG['people'] = "People";//0
$LANG['phone'] = "Telefons";//1
$LANG['phone_short'] = "Ph.";//0
$LANG['preference'] = "preference";//0
$LANG['preference_id'] = "Preference ID";//0
$LANG['preferences'] = "Preferences";//0
$LANG['prepare_simple_invoices'] = "Prepare Simple Invoices for use";//0
$LANG['Price'] = "Price";//0
$LANG['print_preview'] = "Izdrukas apskats";//1
$LANG['print_preview_tooltip'] = "Print Preview of";//0
$LANG['process'] = "Process";//0
$LANG['process_payment'] = "Process Payment";//0
$LANG['process_payment_details'] = "Process Payment Details";//0
$LANG['process_payment_for'] = "Process Payment for";//0
$LANG['process_payment_inv_id'] = "Process Payment Invoice ID";//0
$LANG['process_payment_auto_amount'] = "Process Payment Auto Amount";//0
$LANG['product'] = "Prece";//1
$LANG['product_description'] = "Preces apraksts";//1
$LANG['product_edit'] = "Labot preci";//1
$LANG['product_enabled'] = "Product Enabled";//0
$LANG['product_id'] = "Preces ID";//1
$LANG['product_sales'] = "Product Sales";//0
$LANG['product_to_add'] = "Pievienot preci";//1
$LANG['product_unit_price'] = "Product Unit Price";//0
$LANG['products'] = "Preces";//1
$LANG['products_by_customer'] = "Products by Customer";//0
$LANG['products_sold_customer_total'] = "Products sold - Customer - Total";//0
$LANG['products_sold_total'] = "Products Sold - total";//0
$LANG['provision_of'] = "Provision of";//0
$LANG['quantity'] = "Daudzums";//1
$LANG['quantity_short'] = "Sk.";//1
$LANG['quick_view'] = "Quick View";//0
$LANG['quick_view_of'] = "This is a Quick View of";//0
$LANG['quick_view_tooltip'] = "Quick View of";//0
$LANG['rate'] = "Rate";//0
$LANG['reports'] = "Reports";//0
$LANG['Required_Field'] = "Required Field";//0
$LANG['role'] = "Role";//0
$LANG['sales'] = "Sales";//0
$LANG['sales_by_customers'] = "Sales by customers";//0
$LANG['sales_report'] = "Sales Report";//0
$LANG['sanity_check'] = "Sanity check of invoices";//0
$LANG['save'] = "Saglabāt";//1
$LANG['save_biller'] = "Saglabāt kreditoru";//1
$LANG['save_biller_failure'] = "Something went wrong, please try saving the biller again<br />";//0
$LANG['save_biller_success'] = "Biller successfully saved, <br /> you will be redirected to the Manage Billers page";//0
$LANG['save_custom_field'] = "Save Custom Field";//0
$LANG['save_custom_field_failure'] = "Something went wrong, please try editing the custom field again<br />";//0
$LANG['save_custom_field_success'] = "Custom field successfully saved, <br /> you will be redirected back to the Manage Custom Fields";//0
$LANG['save_customer'] = "Saglabāt klientu";//1
$LANG['save_customer_failure'] = "Something went wrong, please try saving the customer again";//0
$LANG['save_customer_success'] = "Customer successfully saved,<br /> you will be redirected back to the Manage Customers page";//0
$LANG['save_defaults'] = "Save Defaults";//0
$LANG['save_defaults_failure'] = "Something went wrong, please try setting the system defaults again";//0
$LANG['save_defaults_success'] = "The system default has been successfully updated,<br /> you will be redirected back to System Defaults page";//0
$LANG['save_invoice'] = "Saglabāt pavadzīmi";//1
$LANG['save_invoice_failure'] = "Something went wrong, please try saving the invoice again";//0
$LANG['save_invoice_items_success'] = "Processing invoice items<br /> you will be redirected back to the Quick View of this invoice";//0
$LANG['save_invoice_success'] = "Processing invoice, <br /> you will be redirected Quick View of this invoice";//0
$LANG['save_payment_failure'] = "Something went wrong, please try saving the payment again";//0
$LANG['save_payment_invoice_success'] = "Payment successfully processed, <br /> you will be redirected to the Manage Invoices page";//0
$LANG['save_payment_success'] = "Payment successfully processed,<br /> you will be redirected back to the Manage Payments page";//0
$LANG['save_payment_type'] = "Saglabāt nomaksas veidu";//1
$LANG['save_payment_type_failure'] = "Something went wrong, please try saving the payment type again";//0
$LANG['save_payment_type_success'] = "Payment Type successfully saved, <br /> you will be redirected back to the Manage Payment Types";//0
$LANG['save_preference_failure'] = "Something went wrong, please try saving the invoice preference again";//0
$LANG['save_preference_success'] = "Invoice preference successfully saved,<br /> you will be redirected to Manage Preferences page";//0
$LANG['save_product'] = "Saglabāt preci";//1
$LANG['save_product_failure'] = "Something went wrong, please try saving the product again";//0
$LANG['save_product_success'] = "Product successfully saved, <br /> you will be redirected to the Manage Products page";//0
$LANG['save_tax_rate'] = "Saglabāt nodokli";//1
$LANG['save_tax_rate_failure'] = "Something went wrong, please try adding the tax rate again";//0
$LANG['save_tax_rate_success'] = "Tax rate successfully saved, <br /> you will be redirected to the Manage Tax Rates page";//0
$LANG['save_user_failure'] = "Something went wrong, please try saving the user again<br />";//0
$LANG['save_user_success'] = "User successfully saved, <br /> you will be redirected to the Manage Users page";//0
$LANG['select_invoice'] = "Lūdzu izvēlaties pavadzīmi";//1
$LANG['settings'] = "Settings";//0
$LANG['shortcut'] =" Shortcut menu";//0
$LANG['show_details'] = "Show details";//0
$LANG['simple_invoices'] = "Simple Invoices";//0
$LANG['state'] = "State";//0
$LANG['stats'] =" Quick reports";//0
$LANG['stats_biller'] ="Top Biller - by amount invoiced";//0
$LANG['stats_customer'] ="Top Customer - by amount invoiced";//0
$LANG['stats_debtor'] ="Largest debtor";//0
$LANG['street'] = "Ielas adrese";//1
$LANG['street2'] = "Ielas adrese 2";//1
$LANG['sub_total'] = "Sub Total";//0
$LANG['subject'] = "Subject";//0
$LANG['sum'] = "Summa";//1
$LANG['summary'] = "Summary";//0
$LANG['summary_of_accounts'] = "Summary of accounts";//0
$LANG['system_defaults'] = "System Defaults";//0
$LANG['system_preferences'] = "System Preferences";//0
$LANG['tax'] = "Nodoklis";//1
$LANG['tax_description'] = "Nodokļa info";//1
$LANG['tax_id'] = "Nodokļa ID";//1
$LANG['tax_percentage'] = "Tax Percentage";//0
$LANG['tax_rate'] = "Tax Rate";//0
$LANG['tax_rate_details'] = "Tax rate details";//0
$LANG['tax_rate_id'] = "Tax Rate ID";//0
$LANG['tax_rate_to_add'] = "Tax rate to add";//0
$LANG['tax_rates'] = "Tax Rates";//0
$LANG['tax_total'] = "Total tax included";//0
$LANG['telephone_short'] = "Tel";//0
$LANG['thank_you'] = "Thank you for choosing Simple Invoices!";//0
$LANG['to'] = "To";//0
$LANG['total'] = "Total";//0
$LANG['total_amount'] = "Total amount";//0
$LANG['total_by_aging_periods'] = "Total by Aging periods";//0
$LANG['total_invoices'] = "Total Invoices";//0
$LANG['total_owed_per_customer'] = "Total owed per Customer";//0
$LANG['total_owing'] = "Parāda kopsumma";//1
$LANG['total_paid'] = "Nomaksas kopsumma";//1
$LANG['total_sales'] = "Total Sales";//0
$LANG['total_sales_by_customer'] = "Total Sales by Customer";//0
$LANG['total_style'] = "Total style";//0
$LANG['total_taxes'] = "Total Taxes";//0
$LANG['total_uppercase'] = "KOPSUMMA";//0
$LANG['totals'] = "Kopsumma";//0
$LANG['Unit_Cost'] = "Unit Cost";//0
$LANG['unit_price'] = "Unit Price";//0
$LANG['upgrading_simple_invoices'] = "Upgrading Simple Invoices";//0
$LANG['user_add'] = "Add User";//0
$LANG['users'] = "Users";//0
$LANG['using_simple_invoices'] = "Using Simple Invoices";//0
$LANG['view'] = "View";//0
$LANG['want_more_fields'] = "want more fields";//0
$LANG['welcome'] = "Welcome to ";//0
$LANG['what_are_custom_fields'] = "What are custom fields ";//0
$LANG['whats_all_this_inv_pref'] = "Whats all this Invoice Preference stuff about ";//0
$LANG['whats_this_page_about'] = "What's this page about ";//0
$LANG['wheres_the_edit_button'] = "Wheres the edit button ";//0
$LANG['yes'] = "Yes";//0
$LANG['zip'] = "Pasta kods";//1
?>
