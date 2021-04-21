<?php
	require 'connect.inc.php';
	session_start();
	$user=$_SESSION['username'];
	$name=$_POST['pname'];
	$query="delete from $user where pname='$name'";
	mysql_query($query);
	unset ($_SESSION[$name]);
	header('location: shopping_cart.php')
?>