<?php

function form_get_article($product) {
  $html_element .= '<form action="#" method="POST">';
  foreach ($product as $key => $value) {
    $html_element .= '<div id="article">';
    $html_element .= '</br>'. $key .' : '. $value;
    $html_element .= '</div>';
  }
  $html_element .= '<button type="submit" name="quantity">+</button></form>';
  return $html_element;
}

function formulaire_add_article() {
  $html_element .= '<form class="formulaire" action="#" method="POST">';
  $html_element .= '<p>product name</p><input type="text" name="product_name" value="">';
  $html_element .= '<p>price</p><input type="text" name="price" value="">';
  $html_element .= '<p>stock</p><input type="text" name="stock" value="">';
  $html_element .= '<button type="submit" name="button">submit</button></form>';

  return $html_element;
}

?>
