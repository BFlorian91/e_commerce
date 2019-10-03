<?php

	function userExists($username) {
		
		$query = mysqli_prepare($db, "SELECT * FROM users WHERE username = '$username'");
		mysqli_stmt_bind_param("s", $username);
		mysqli_stmt_execute($query);
		// stock le result
		mysqli_stmt_store_result($query);

		// count le nombre de ligne ou l'element est present dans la db
		if (mysqli_stmt_num_rows()) {
			return true;
		} else {
			return false;
		}
		mysqli_stmt_close($query);
	}
