<?php

	function router() {
	
		switch ($_GET['action']) {
		case 'cart':
			echo 'page cart';
			break;
		case 'login':
			echo 'page login';
			break;
		default:
			echo 'index';
			break;
		}
	}
