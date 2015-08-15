<?php

class MnoIdMap {

  public static function addMnoIdMap($local_id, $local_entity_name, $mno_id, $mno_entity_name) {
    $q = db::getInstance();
    $query = "INSERT INTO mno_id_map (mno_entity_guid, mno_entity_name, app_entity_id, app_entity_name, db_timestamp) VALUES ('".$mno_id."','".strtoupper($mno_entity_name)."','".intval($local_id)."','".strtoupper($local_entity_name)."',UTC_TIMESTAMP)";
    $result = $q->query($query);
    return $result;
  }

  public static function findMnoIdMapByMnoIdAndEntityName($mno_id, $mno_entity_name) {
    $q = db::getInstance();
    $result = $q->query("SELECT * from mno_id_map WHERE mno_entity_guid = '$mno_id' AND mno_entity_name = '".strtoupper($mno_entity_name)."'")->fetch();
    return $result;
  }

  public static function findMnoIdMapByLocalIdAndEntityName($local_id, $local_entity_name) {
    $q = db::getInstance();
    $result = $q->query("SELECT * from mno_id_map WHERE app_entity_id = ".intval($local_id)." AND app_entity_name = '".strtoupper($local_entity_name)."'")->fetch();
    return $result;
  }

  public static function deleteMnoIdMap($local_id, $local_entity_name) {
    $q = db::getInstance();
    $query = "UPDATE mno_id_map SET deleted_flag = 1 WHERE app_entity_id = ".intval($local_id)." AND app_entity_name = '".strtoupper($local_entity_name)."'";
    $result = $q->query($query);
    return $result;
  }

}
