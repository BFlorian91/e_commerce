<?php

	function logged_in() {
		if (isset($_SESSION['id'])) {
			return true;
		} else {
			return false;
		}
	}
