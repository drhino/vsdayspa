<?php
  global $services;
  
  $service = $node->field_service[0]['view'];

  $html  = '';
  $html .= '<tr>';
  $html .= '<th class="service-item-header">'.$node->title.'</th>';
  $html .= '<td class="d1">';
  $html .= $node->field_duration[0]['value'] ? $node->field_duration[0]['value'] : '&nbsp;'.'</td>';
  $html .= $node->field_duration[0]['value'] ? '<td class="d2">' : '<td style="text-align:right" class="d1">';
  $html .= $node->field_rate[0]['value'].'</td>';
  $html .= '</tr>';
  if ($node->field_misc[0]['value']) {
    $html .= '<tr>';
    $html .= '<td colspan="3" style="border-bottom: none;" class="d3">'.strip_tags($node->content['body']['#value']).'</td>';
    $html .= '</tr>';  
    $html .= '<tr>';
    $html .= '<td colspan="3" style="text-align:right; padding: 5px 0;border-bottom:1px dotted #987E74" class="d1">';
    $html .= $node->field_misc[0]['value'];
    $html .= '</td></tr>';
  }
  else {
    $html .= '<tr>';
    $html .= '<td colspan="3" class="d3">'.strip_tags($node->content['body']['#value']).'</td>';
    $html .= '</tr>';
  }

  $services[$service][] = $html;
?>
