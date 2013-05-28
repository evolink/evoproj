<?php
	$lifeTime = 3600;
	session_set_cookie_params($lifeTime);
	session_start();
	$_SESSION['si_login']='';
	$_SESSION['nom']='';
	$_SESSION['prenom']='';
	$_SESSION['password']='';
	echo "<script>top.location='../index.php';</script>";
?>