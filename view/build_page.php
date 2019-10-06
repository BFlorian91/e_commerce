<?php

	function build_page($content) {
	 $html .= header_page();
	 $html .= body_page($content);
 	 return $html;	 
	}
