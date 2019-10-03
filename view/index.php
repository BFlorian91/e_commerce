<html>
	<head>
		<meta charset="UTF-8" />
		<title>The Rainbow Market</title>
		<link rel="stylesheet" href="../css/home.css">
	</head>
	<body>
		<div class="header">
			<p id="cart"><a href="cart.html">
				<img alt="cart" src="../img/cart.png">
			</a></p>
			<a href="login.html" id="login"><button class="button-loggin">login</button></a>
			<div id="website_name">The Rainbow Market</div>
		</div>
		<div id="body">
			<div class="box left-column">
				<div style="margin: 0 10; font: italic 18px new courier, serif;">
					<p style="font-size: 24px;">What are you looking for today?</p><br>
					<p style="font-size: 24px;">Something...</p><br>
					<form action="checkbox.php" method="post">
					<?php 
						$value = array( 
							'color1' => 'pink',
							'color2' => 'orange',
							'color3' => 'green',
							'color4' => 'blue',
							'color5' => 'purple',
							'color6' => 'red',
							'taste1' => 'sweet',
							'taste2' => 'sour',
							'look1' => 'hairy'
						);

						foreach ($value as $color => $color_name) {
							$html_element .= "<input type=\"checkbox\" name=" . $color . " value=" . $color_name . ">" . ucfirst($color_name) . "<br />";
						}
						echo $html_element.'<br />';
					?>
						<input id="checkbox-submit" type="submit" value="Let's find it!">
					</form>
				</div>
			</div>
			<div class="box main-box">
				<div class="dropdown">
					<button>Sort by price:</button>
					<form class="sortby" action="sortby.php" method="post">
						<input type="submit" name="sortby1" value="low to high"><br>
						<input type="submit" name="sortby2" value="high to low"><br>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
