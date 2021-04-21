<?php
	require 'connect.inc.php';
	$aname = $_POST['a'];
	echo $aname;
	session_start();
	$username = $_SESSION['username'];
	echo $username;
	$_SESSION[$aname]=$aname;
	$query="SELECT * FROM `album` WHERE `name`='".$aname."'";
	$run = mysql_query($query);
	$id = mysql_result($run,0,'a_id');
	$name = mysql_result($run,0,'name');
	$price = mysql_result($run,0,'price');
	echo $id;
	echo $name;
	echo $price;
	
	$in = "INSERT INTO $username VALUES ($id,'$name', $price);";
	mysql_query($in);
	
	header('location: albums.php');
?>