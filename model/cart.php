<?php
	// call page login in view;
function display_login() {
	global $database;
	$datas = array();

	$request = $datas->query('SELECT * FROM test');
	while ($data = $request->fetch()) {
		$datas = $data;
	}
	return $datas;
}
?>
