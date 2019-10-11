<?php
    function homeContent($products = null) {

      $html_element .= '<h1 id="welcome_home">Welcome to the Market !</h1>';
      $html_element .= '</div>';
      $html_element .= $products;
      $html_element .= '</div>';

      return $html_element;
    }
?>
