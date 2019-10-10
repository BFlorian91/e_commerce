<?php

function signin_form() {

	$html_element .= '<div class="container">';
	$html_element .= '<form action="#" class="sign_form" method="POST">';
	$html_element .= 	'<label>Signin</label>';
	$html_element .=	'<input class="input_sign" type="text" name="name" placeholder="login name">';
	$html_element .=	'<input class="input_sign" type="password" name="pass" placeholder="password">';
	$html_element .=	'<input class= "submit_button" type="submit" value="login">';
	$html_element .= '</form>';
	$html_element .= '</div>';

	return $html_element;
}
