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
			<a id="login"><button action="login.php" class="button-loggin">login</button></a>
			<div id="website_name">The Rainbow Market</div>
		</div>
		<div id="body">
			<div class="box left-column">
				<div style="margin: 0 10; font: italic 18px new courier, serif;">
					<p style="font-size: 24px;">What are you looking for today?</p></br>
					<p style="font-size: 24px;">Something...</p></br>
					<form action="checkbox.php">
						<input type="checkbox" name="color1" value="pink">Pink<br>
						<input type="checkbox" name="color2" value="orange">Orange<br>
						<input type="checkbox" name="color3" value="green">Green<br>
						<input type="checkbox" name="color4" value="blue">Blue<br>
						<input type="checkbox" name="color5" value="purple">Purple<br>
						<input type="checkbox" name="color6" value="red">Red<br></br>
						<input type="checkbox" name="taste1" value="sweet">Sweet<br>
						<input type="checkbox" name="taste2" value="sour">Sour<br></br>
						<input type="checkbox" name="look1" value="hairy">Hairy<br>
						<input type="submit" value="Let's find it!">
					</form>
				</div>
			</div>
			<div class="box main-box">
				<div>
					<button>Sort by</button>
					<div>
						<input type="checkbox" name="sortby1" value="lowtohigh">Price: low to high<br>
						<input type="checkbox" name="sortby2" value="hightolow">Price: high to low<br>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
foreach ($login as $n) {
	$n['name'].'<br />';
	$n['loggued'].'<br />';
}
