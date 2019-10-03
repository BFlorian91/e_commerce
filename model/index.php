<?php

	require_once 'dbconfig.php';
	require_once 'register.php';

	$db = mysqli_connect($host, $user, $pass, $database);

	if (!$db) {
		die ("Cannot connect to database. " . mysqli_connect_error());
	}
	$query = "SELECT * FROM users";
	$res = mysqli_query($db, $query);

	signup($db);

// Display
	if (!$res) 
	die("Invalid request : " . mysql_error());
	else {
		while ($row = mysqli_fetch_array($res)) {
  	  echo $row['name'] . "<br/>";
			echo $row['pass'] . "<br/>" . "<br/>";
		}	
	}
mysqli_close($db);
