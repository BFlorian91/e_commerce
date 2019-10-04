<?php

	function router() {
		$db = connectionToBdd();
		switch ($_GET['action']) {
		case 'sign_up':
			$ctrl .= sign_up($db);
			break;
		case 'login':
			$ctrl .= sign_in($db);
			break;
		case 'cart':
			$ctrl .= cart();
			break;
		case 'panel':
			$ctrl .= set_article_in_shop($db);
			break;
		case 'home':
			$ctrl .= get_article_in_shop($db);
			break;
		default:
			$ctrl .= get_article_in_shop($db);
			break;
		}
		return $ctrl;
	}
