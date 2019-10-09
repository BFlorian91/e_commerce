<?php

function signin_form() {

	$html_element .= '<form action="#" id="signin_form" method="POST">';
	$html_element .=	'<input type="text" name="name"><br>';
	$html_element .=	'<input type="password" name="pass"><br>';
	$html_element .=	'<input type="submit" value="login">';
	$html_element .= '</form>';

	return $html_element;
}
