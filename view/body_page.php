<?php
	function body_page($content) {
		$html_element .= "<body style=\"background: #212121; color: white;\">";
		$html_element .= $content;
		$html_element .= "</body>";
		$html_element .= "</html>";
		return $html_element;
	}
