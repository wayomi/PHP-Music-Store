<?php
	require 'connect.inc.php';
		session_start();
	$username = $_SESSION['username'];
	$dropcart = "drop table ".$username."";
	mysql_query($dropcart);
	unset($_SESSION['username']);
		session_destroy();
	header('location: ../index.php');
?>