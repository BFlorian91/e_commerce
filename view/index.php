<html>
	<head>
		<meta charset="UTF-8" />
		<title>The Rainbow Market</title>
		<link rel="stylesheet" href="../css/home.css">
	</head>
	<body>
		<div class="header">
			<div id="head-opt">
				<a href="login.php" id="login"><button class="button-loggin">login</button></a>
				<p id="cart">
					<a href="cart.html"><img alt="cart" src="../img/cart.png"></a>
				</p>
			</div>
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
							'color6' => 'yellow',
							'color7' => 'red',
							'color8' => 'multi-colored',
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
				<div id="main-opt">
					<div class="dropdown">
						<button>Sort by price:</button>
						<form class="sortby" action="sortby.php" method="post">
							<input type="submit" name="sortby1" value="low to high"><br>
							<input type="submit" name="sortby2" value="high to low"><br>
						</form>
					</div>
				</div>
				<div id="articles-display">
				<?PHP
						include	 '../datas/items.php';
						//NEED TO CHECK AND ONLY ARTICLE WHO HAVE CHECKBOXES ATRIBUTES
						//NEED TO CHECK SORTBY AND SORT ARTICLES ACCORDING TO IT
						foreach ($articles as $article) {
							$html_article .= "<div class=\"article\">";
							$html_article .= "<p class=\"article-name\">" . $article['name'] . "</p>";
							if ($article['multiple-colors'])
							{
								$html_article .= "<form id=\"color-form\" action=\"color_opt.php\" method=\"post\">";
								$colors = explode(' ', $article['color']);
								$i = 1;
								foreach ($colors as $color) {
									$html_article .= "<input class=\"color-opt\" type=\"submit\" name=\"color" . $i ."\" value=\"" . $color . "\" style=\"background-color: " . $color . "\">";
									$i++;
									}
								$html_article .= "</form></br>";
							}
							$html_article .= "<img alt=\"" . $article['name'] . "\" src=\"../img/items/" . $article['url'] . "\">";
							$html_article .= "<div class=\"add-to-cart\">";
							$html_article .= "<form action=\"drop.php\" method=\"post\">";
							$html_article .= "<input id=\"drop\" type=\"submit\" name=\"drop\" value=\"" . $article['name'] . "\"></form>";
							$html_article .= "<p class=\"price\">" . $article['price'] . " €</p>";
							$html_article .= "<form action=\"add.php\" method=\"post\">";
							$html_article .= "<input id=\"add\" type=\"submit\" name=\"add\" value=\"" . $article['name'] . "\"></form></div></div>";
						}
						echo $html_article . '<br />';
				?>
				</div>
			</div>
		</div>
	</body>
</html>
