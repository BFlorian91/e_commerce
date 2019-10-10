<?php
	function header_page($username = null) {

		$html_element .= '<html>';
		$html_element .= '<head>';
		$html_element .= '<meta charset="UTF-8" />';
		$html_element .= '<title>The Rainbow Market</title>';
		$html_element .= '<link rel="stylesheet" href="../lib/style.css"/>';
		$html_element .= '</head>';

		return $html_element;
	}
