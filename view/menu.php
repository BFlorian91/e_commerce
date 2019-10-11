
<?php

    function menu() {
		
		$html_element .= '<div class="header_container">';
		$html_element .= '<a href="index.php" id="website_name">The Rainbow Market</a>';
      
		if (empty($_COOKIE['username'])) {
			$html_element .= '<div class="buttons">';
			$html_element .= '<a href="index.php?action=signup" class="button_menu">Sign up</a>';
			$html_element .= '<a href="index.php?action=login" class="button_menu">Sing in</a>';
			$html_element .= '</div>';
		} else {
			$html_element .= '<p id="hi">Hello ' . ucfirst($_SESSION['username']) . '</p>'; 
			$html_element .= '<a href="index.php?action=logout" class="button_menu">Logout</a>';
		}  
		if ($_COOKIE['username'] == 'admin') {
			$html_element .= '<a href="index.php?action=panel" class="button_menu">Manage</a>';
		}
		$html_element .= '<a href="index.php?action=cart"><img id="cart" alt="cart" src="https://purepng.com/public/uploads/large/purepng.com-shopping-cartshoppingcarttrolleycarriagebuggysupermarkets-1421526532323sy0um.png"></a>';
		$html_element .= '</div>';
        
        return $html_element;
    }