<?php

	function build_page($content, $username = null) {
	 $html .= header_page($username);
	 $html .= body_page($content);
 	 return $html;	 
	}
