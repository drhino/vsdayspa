<?php
  global $specials;
  
  $html  = '';
  $html .= '<h2 class="sp">'.$node->title.'</h2>';
  $html .= '<p class="desc">'.strip_tags($node->content['body']['#value']).'</p>';
  $html .= $node->field_listings[0]['value'];
  $html .= '<div class="pc">'.$node->field_rate[0]['value'].'</div>';
  
  $specials[] = $html;
?>