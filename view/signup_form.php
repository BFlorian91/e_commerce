<?php
	function signup_form() {
		
		$html_element .= '<div class="container">';
		$html_element .= '<form class="sign_form" action="#" method="POST">';
		$html_element .= 	'<label>Signup</label>';
		$html_element .=	'<input class="input_sign" type="text" name="name" placeholder="login name">';
		$html_element .=	'<input class="input_sign" type="text" name="email" placeholder="email">';
		$html_element .=	'<input class="input_sign" type="password" name="pass" placeholder="password">';
		$html_element .=	'<input class= "submit_button" type="submit" value="signup">';
		$html_element .= '</form>';
		$html_element .= '</div>';

		return $html_element;
	}
?>
