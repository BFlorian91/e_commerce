<?php

	require_once 'view/header.php';
	require_once 'view/body.php';
	require_once 'view/home.php';
	require_once 'view/login.php';
	require_once 'view/sign_up.php';
	require_once 'view/cart.php';
	require_once 'view/shop.php';
	require_once 'view/build_page.php';
	require_once 'lib/connectToBdd.php';
	require_once 'lib/action_sign_up.php';
	require_once 'lib/action_sign_in.php';
	require_once 'lib/manage_shop.php';
	require_once 'controller/controller.php';

	$content = router();
	echo build_page($content);
?>
