<?php

	require_once 'index.php';

	$req = $db->prepare("INSERT INTO users(name, pass) VALUES(:name, :pass)");
	
	function create_user($name, $pass) {
		//$req->execute(array(
			//'name' => $name,
			//'pass' => $pass
		//));
		$req->bindParam(':name', $name);
		$req->bindParam(':pass', $pass);
	}

	create_user('florian', '123456');
	die ("TEST");
	display_user();	


