<?php
	require 'controller/index.php';

	echo '<h1 style="text-align: center;">HOME SWEET HOME</h1>';

	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'cart') {
			cart();	
		} else {
			notFound();
		}
	}
?>
