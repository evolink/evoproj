<?php
	$lifeTime = 3600;
	session_set_cookie_params($lifeTime);
	session_start();
	require('data/mysql.php');
?>