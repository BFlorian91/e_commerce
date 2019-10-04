<?php
	function body_page($content) {
		$html_element .= "<body>";
		$html_element .= $content;
		$html_element .= "</body>";
		$html_element .= "</html>";
		return $html_element;
	}
