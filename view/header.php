<?php
	function header_page($username = null) {
		$html_element .= "<html>";
		$html_element .= "<head>";
		$html_element .= "<meta charset=\"UTF-8\" />";
		$html_element .= "<title>The Rainbow Market</title>";
		$html_element .= "<link rel=\"stylesheet\" href=\"../css/home.css\"/>";
		$html_element .= "</head>";
		$html_element .= "<div class=\"header\">";
		$html_element .= "<p id=\"cart\"><a href=\"index.php?action=cart\"><img alt=\"cart\" src=\"../img/cart.png\"></a></p>";
		if ($_SESSION['username'] == 'admin') {
			$html_element .= "<a href=\"index.php?action=panel\" id=\"manage_shop\"><button class=\"button-loggin\">Manage shop</button></a>";
		}
		if (empty($_SESSION['username'])) {
		$html_element .= "<a href=\"index.php?action=signup\" id=\"signup\"><button class=\"button-loggin\">Sign up</button></a>";
		$html_element .= "<a href=\"index.php?action=login\" id=\"login\"><button class=\"button-loggin\">login</button></a>";
		} else {
			$html_element .= "Hello " . $username . "  ";
			$html_element .= "<a href=\"index.php?action=logout\" id=\"logout\"><button class=\"button-loggin\">Logout</button></a>";
		}
		$html_element .= "<div id=\"website_name\">The Rainbow Market</div>";
		$html_element .= "</div>";
		return $html_element;
	}
