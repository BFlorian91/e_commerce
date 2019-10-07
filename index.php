<?php
	require_once 'view/header.php';
	require_once 'view/body.php';
	require_once 'view/index.php';
	require_once 'view/build_page.php';
	require_once 'view/signup_form.php';
	require_once 'view/signin_form.php';
	require_once 'view/error.php';
	require_once 'model/index.php';
	require_once 'model/register.php';
	require_once 'controller/controller.php';

	$content = router();
	echo build_page($content);
