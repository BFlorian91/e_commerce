<?php

	function signin_form() {

		$html_element .= '<form action="#" method="POST">';
		$html_element .=	'<input type="text" name="name">';
		$html_element .=	'<input type="password" name="pass">';
		$html_element .=	'<input type="submit" value="login">';
		$html_element .= '</form>';

		return $html_element;
	}
