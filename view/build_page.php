<?php

	function build_page($content) {
		$render .= header_page();
		$render .= body_page($content);
		return $render;
	}
