<?php

	session_start();

	$database = new PDO('mysql:host=localhost;dbname=ecom', 'root', '123456');


	echo '<h1 style="text-align: center;">HOME SWEET HOME</h1>';

	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'cart') {
			require 'controller/index.php';
			//cart();
		} else {
			//notFound();
			echo '404';
		}
	}
?>
