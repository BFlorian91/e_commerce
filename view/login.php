<?php
include	"../ft_php.php";

if ($_SESSION['loggued_as_user'])
	header('Location: index.php');
if ($_POST['login'] == "Log me in!") {
	if (check_logs($_POST['name'], $_POST['password']))
	{
		$_SESSION['loggued_as_user'] = $_POST['name'];
		header('location: index.php');
	}
	else
		$error_msg = "<p class=\"error\">Sorry, try again or create an account.</p>";
}
if ($_POST['newaccount'] == "Create account!") {
	if (create_account($_POST['name'], $_POST['password']))
	{
		$_SESSION['loggued_as_user'] = $_POST['name'];
		header('location: index.php');
	}
	else
		$error_msg = "<p class=\"error\">Sorry, choose an other login.</p>";
}

?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="../css/login.css">
	</head>
	<body>
		<div class="login-block">
			<p class="welcome">Wellcome !</p>
			<?php
			echo $error_msg;
			?>
			<form action="login.php" method="post">
			<div class="input">
				Login: <input name="name"/><br/>
				Password: <input  name="password"/>
			</div><br/><br/>
			<div class="buttons">
				<input type="submit" name="login" value="Log me in!"/>
				<input type="submit" name="newaccount" value="Create account!"\>
			</div>
			</form>
		</div>
	</body>
</html>
