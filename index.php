<?php

	define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
	define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

	require 'controller/index.php';

	$params = explode('/', $_GET['action']);
	$controller = $params[0];
	$action = isset($params[1]) ? $params[1] : 'index';

	echo '<h1 style="text-align: center;">HOME SWEET HOME</h1>';

	echo $controller.PHP_EOL;
	echo $action.PHP_EOL;
	print_r($params);
		
	if (isset($_GET['action'])) {
		if ($_GET['action'] == $controller) {
			require 'controller/'.$controller.'.php';	
		} else {
			require 'controller/'.$controller.'php';
		}
	}
?>
