<?php
	function error_($content) {
		$html_element .= '<div id="error">';
		$html_element .= '<h3>' . $content . '</h3>';
		$html_element .= '</div>';

		return $html_element;
	}
?>