<?php
/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/fix-ie.css" />';
  if (defined('LANGUAGE_RTL') && $language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. base_path() . path_to_theme() .'/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}

function getServiceItems($id) {
  $query = sprintf("SELECT * from {node} n 
             INNER JOIN {content_type_service_item} csi 
             ON csi.nid = n.nid 
             WHERE csi.field_service_nid = '%d' AND 
             n.type = 'service_item'", $id);
  return getResultsArray($query);
}

function getResultsArray($query) {
  $result = db_query($query);
  while($row = db_fetch_array($result)) {
   $results[] = $row;
  }	
  return $results;
}
