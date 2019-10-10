<?php

function userAlreadyExists($db) {

	$name = $_POST['name'];
	$res = mysqli_query($db, "SELECT name FROM users WHERE name = '$name'");
	$datas = mysqli_fetch_array($res, MYSQLI_NUM);
		return $datas[0];
}


function action_signup($db) {

	$db_user = userAlreadyExists($db);
	//var_dump($db_user);
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

		$query = mysqli_prepare($db, "INSERT INTO users(name, email, pass) VALUES (?, ?, ?);");
		mysqli_stmt_bind_param($query, "sss", $name, $email, $pass_hash);
		if ($db_user != $_POST['name']) {
			mysqli_stmt_execute($query);
			$success = success_("Account created !");
		} else {
			return error_("Username already exist !").signup_form();
		}
		mysqli_stmt_close($query);

		//echo "<pre>";
		//var_dump($db);
		//var_dump($name, $pass_hash);	
		//var_dump($query);
		//echo "</pre>";
		return ($success . homeContent());
	} else {
		return signup_form();	
	}
}
