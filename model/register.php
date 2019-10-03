<?php
	function signup($db) {
		if (!isset($_POST['name']) && isset($_POST['pass'])) {

			//$name = "Doffsfe";
			//$pass = "blabla";

			$pass_hash = hash("Whirlpool", $pass);
			$query = mysqli_prepare($db, "INSERT INTO users(name, pass) VALUES(?, ?);");	
			mysqli_stmt_bind_param($query, "ss", $name, $pass);
			mysqli_stmt_execute($query);
			mysqli_stmt_close($query);

			echo "<pre>";
				var_dump($query);
			echo "</pre>";
			if (!mysqli_query($db, $query)) {
				echo "Error: " . $query . "<br>" . mysqli_error($db);
			}
		} else
			echo "Invalid datas...";
	}
