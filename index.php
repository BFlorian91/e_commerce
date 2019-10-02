<?php
	//require('controller/index.php');

	echo '<h1>HOME SWEET HOME</h1>';

	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'cart') {
			cart();	
			echo 'TEST';
		} else {
			notFound();
		}
	}
?>
