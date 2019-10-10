<?php
	function success_($content, $username = null) {
		$html_element .= '<div class="success">';
		$html_element .= '<h3>' . $content . $username . '</h3>';
		$html_element .= '</div>';

		return $html_element;
	}
?>