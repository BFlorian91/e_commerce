<?php

function connect_to_db() {
	$host = 'localhost';
	$database = 'ecom';
	$user = 'root';
	$pass = '123456';

	$db = mysqli_connect($host, $user, $pass, $database);
	if (!$db) {
		die ("<h1>Cannot connect to database. " . mysqli_connect_error() . "</h1>");
	} else {
		var_dump($db);
	}
	return $db;
}

// Display

//$query = "SELECT * FROM users";
//$res = mysqli_query($db, $query);
//if (!$res) 
//die("Invalid request : " . mysql_error());
//else {
//while ($row = mysqli_fetch_array($res)) {
//echo "<pre>";
//echo $row['name'] . "<br/>";
//echo $row['pass'] . "<br/>" . "<br/>";
//echo "</pre>";
//}	
//}
