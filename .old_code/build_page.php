<?php

	function build_page() {
		$render .= header_page();
		$render .= body_page();	
		echo $render;
	}
