<?php
	function signup_form() {
		$html_element .= '<form action="#" method="POST">';
		$html_element .=	'<input type="text" name="name">';
		$html_element .=	'<input type="text" name="email">';
		$html_element .=	'<input type="password" name="pass">';
		$html_element .=	'<input type="submit" value="send">';
		$html_element .= '</form>';

		return $html_element;
	}
?>
