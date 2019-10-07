<?php
	require_once 'model/index.php';

	$sql = file_get_contents("ecommerce.sql");
	mysqli_query($link, $sql);

?>

<body 
	style="background: #45454d; margin: 0; padding: 0; display: flex; justify-content: center;"
	>
	
	<form 
		style="margin: auto;" 
		action="install.php" 
		method="post"
	>
		<input 
			style="width: 200px; height: 100px; font-size: 2em;"
			type="submit" 
			name="submit" 
			id="" 
			value="INSTALL" 
		/>
	</form>
</body>
