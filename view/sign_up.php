<?php

  function create_signup_form() {
    $html_element .= '<form class="formulaire" action="#" method="POST">';
    $html_element .= '<p>username</p><input type="text" name="username" value="">';
    $html_element .= '<p>password</p><input type="password" name="password" value="">';
    $html_element .= '<p>email</p><input type="text" name="email" value="">';
    $html_element .= '<button type="submit" name="button">submit</button></form>';

    return $html_element;
  }
?>
