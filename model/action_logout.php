<?php

	function action_logout() { 
		$_SESSION['username'] = "";
		session_destroy();
		return homeContent();
	}
?>
