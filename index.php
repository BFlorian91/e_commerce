<?php
	require_once 'view/header_page.php';
	require_once 'view/menu.php';
	require_once 'view/body_page.php';
	require_once 'view/index.php';
	require_once 'view/build_page.php';
	require_once 'view/signup_form.php';
	require_once 'view/signin_form.php';
	require_once 'view/error.php';
	require_once 'view/success.php';
	require_once 'model/connect_to_db.php';
	require_once 'model/action_signup.php';
	require_once 'model/action_signin.php';
//	require_once 'model/action_logout.php;
	require_once 'controller/controller.php';

	$content = router();
	echo build_page($content, $_SESSION['username']);

