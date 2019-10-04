<?php
    function homeContent($products = null) {
      session_start();
      $value = array(
        'color1' => 'pink',
        'color2' => 'orange',
        'color3' => 'green',
        'color4' => 'blue',
        'color5' => 'purple',
        'color6' => 'red',
        'taste1' => 'sweet',
        'taste2' => 'sour',
        'look1' => 'hairy'
      );
      $html_element .= "<div id=\"body\">";
      $html_element .= "<div class=\"box left-column\">";
      $html_element .= "<div style=\"margin: 0 10; font: italic 18px new courier, serif;\">";
      $html_element .= "<p style=\"font-size: 24px;\">What are you looking for today?</p><br>";
      $html_element .= "<p style=\"font-size: 24px;\">Something...</p><br>";
      $html_element .= "<form action=\"checkbox.php\" method=\"post\">";
      foreach ($value as $color => $color_name) {
        $html_element .= "<input type=\"checkbox\" name=" . $color . " value=" . $color_name . ">" . ucfirst($color_name) . "<br />";
      }
      $html_element .= "<input id=\"checkbox-submit\" type=\"submit\" value=\"Let's find it!\">";
      $html_element .= "</form></div></div>";
      $html_element .= "<div class=\"box main-box\">";
      $html_element .= "<div class=\"dropdown\">";
      $html_element .= "<button>Sort by price:</button>";
      $html_element .= "<form class=\"sortby\" action=\"sortby.php\" method=\"post\">";
      $html_element .= "<input type=\"submit\" name=\"sortby1\" value=\"low to high\"><br>";
      $html_element .= "<input type=\"submit\" name=\"sortby2\" value=\"high to low\"><br>";
      $html_element .= "</form>";
      $html_element .= "</div>";
      $html_element .= $products;
      $html_element .= "</div>";
      $html_element .= "</div>";
      return $html_element;
    }
?>
