<?php

	function router() {
		$db = connect_to_db();
	
		switch ($_GET['action']) {
		case 'signup':
			return action_signup($db);	
			break;
		case 'login':
			return action_signin($db);
			break;
		case 'logout':
			return action_logout();
			break;
		default:
			return homeContent();
			break;
		}
	}
