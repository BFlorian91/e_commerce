<?php

	function router() {
		$db = connect_to_db();
	
		switch ($_GET['action']) {
		case 'signup':
			return signup($db);	
			break;
		case 'login':
			return signin($db);
			break;
		default:
			return homeContent();
			break;
		}
	}
