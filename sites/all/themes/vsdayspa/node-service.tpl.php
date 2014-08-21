<?php
  global $services;
  
  $service = $node->title;
  $service_items = getServiceItems($node->nid);
  
  $html  = '';
  $html .= '<h2 class="s1">'.$service.'</h2>';
  $html .= '<p>'.strip_tags($node->content['body']['#value']).'</p>';
  $html .= '<ul>';
  if ($service_items) {
	$count = 0;
    foreach($service_items as $item) {
      $html .= '<li>'.$item['title'].'</li>';
		$count++;
    }
  }
  $html .= '</ul>';
  $html .= '<div class="ex"><a href="/rates#'.$service.'">Rates</a></div>';
  
  $services[$service][] = $html;
?>