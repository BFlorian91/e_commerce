<?php

function action_signin($db) {

	if (isset($_POST["name"]) && isset($_POST["pass"])) {
		
		$username = $_POST["name"];
		$password = $_POST["pass"];
	
		$res = mysqli_query($db, "SELECT name, pass FROM users WHERE name = \"$username\"");
		$datas = mysqli_fetch_array($res, MYSQLI_NUM);
		//var_dump($username, $datas[0]);
		if ($datas[0] == $username) {
			if (password_verify($password, $datas[1])) {
				session_start();
				$_SESSION['username'] = $username;
				return success_("You are successfuly loggued !", $data[0]) . homeContent();
			} else {
				return error_("Bad password") . signin_form();
			}
		} else {
			return error_("User doesn't exist") . signin_form();
		}
	} else {
			return signin_form();
	}
}