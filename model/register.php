<?php

require_once 'index.php';

//function userAlreadyExists($db) {

	//$username = $_POST['name'];
	//$query = mysqli_prepare($db, "SELECT * FROM users WHERE username = '$username'");
	//mysqli_stmt_bind_param("s", $username);
	//mysqli_stmt_execute($query);
	//// stock le result
	//mysqli_stmt_store_result($query);

	//// Return 1 si present dans la db, 0 si absent; 
	//if (mysqli_stmt_num_rows()) {
		//return true;
	//} else {
		//return false;
	//}
	//mysqli_stmt_close($query);
//}

if (isset($_POST['name']) && isset($_POST['pass'])) {
	
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
	$query = mysqli_prepare($db, "INSERT INTO users(name, pass) VALUES(?, ?);");	
	mysqli_stmt_bind_param($query, "ss", $name, $pass_hash);
	mysqli_stmt_execute($query);

	echo "<pre>";
		var_dump($db);
		var_dump($name, $pass_hash);	
		var_dump($query);
	echo "</pre>";

	if (!mysqli_query($db, $query)) {
		echo "MYSQL ERROR: " . $query . "<br>" . mysqli_error($db);
	}
	mysqli_stmt_close($query);
} else {
	echo "Invalid datas...";
	header("Location: ../view/login.php");
}
