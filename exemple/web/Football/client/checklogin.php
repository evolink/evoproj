<?php
	$lifeTime = 3600;
	session_set_cookie_params($lifeTime);
	session_start();
	require('../data/mysql.php');
	$usern1=(isset($_POST['e_mail']))?$_POST['e_mail']:"";
	$passw1=(isset($_POST['password']))?$_POST['password']:"";
	$usern2=(isset($_SESSION['e_mail']))?$_SESSION['e_mail']:"";
	$passw2=(isset($_SESSION['password']))?$_SESSION['password']:"";

	$drapeau=0;
	$sql="select * from client";
	$query=mysql_query($sql);
	while($rs=mysql_fetch_array($query)){
		if($usern1==$rs['client_e_mail']&&$passw1==$rs['client_password']){
			$_SESSION['si_login']=1;
			$_SESSION['nom']=$rs['client_nom'];
			$_SESSION['prenom']=$rs['client_prenom'];
			$_SESSION['e_mail']=$rs['client_e_mail'];
			echo "<script>top.location='../index.php';</script>";
			$drapeau=1;
		}
		else{
			if($usern2==$rs['client_e_mail']&&$passw2==$rs['client_password']){
				$drapeau=1;
			}
		}
	}
	if($drapeau==0){
		echo "<script>top.location='login.php';</script>";
	}
?>