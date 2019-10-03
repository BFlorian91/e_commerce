<?php

	require_once 'dbconfig.php';

	$db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);

	function display_user() {
		
		$users = array();

    foreach($db->query('SELECT * from users') as $row) {
			$users = $row;
				print_r($users.PHP_EOL);
		}
	}
