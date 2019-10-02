<?php

	require_once 'controller/controller.php';
	require_once 'view/header.php';
	require_once 'view/body.php';
	require_once 'view/build_page.php';

	router();
	build_page();
?>
