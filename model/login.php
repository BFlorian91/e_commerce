<?php

function login($db) {

	$res = mysqli_query($db, "SELECT name, pass FROM users");
	$data = mysqli_fetch_array($res, MYSQLI_NUM);
	
}
