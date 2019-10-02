<?php

	function header_page() {
		$html_element .= "<html>";
		$html_element .= "<head>";
		$html_element .= "<meta charset=\"UTF-8\" />";
		$html_element .= "<title>The Rainbow Market</title>";
		$html_element .= "<link rel=\"stylesheet\" href=\"../css/home.css\"/>";
		$html_element .= "</head>";
		$html_element .= "<div class=\"header\">";
		$html_element .= "<p id=\"cart\"><a href=\"cart.html\"><img alt=\"cart\" src=\"../img/cart.png\"></a></p>";
		$html_element .= "<a href=\"login.html\" id=\"login\"><button class=\"button-loggin\">login</button></a>";
		$html_element .= "<div id=\"website_name\">The Rainbow Market</div>";
		$html_element .= "</div>";

		return $html_element;
	}
