<?php
	require 'connect.inc.php';
	$name=$_POST['cname'];
	$email=$_POST['cmail'];
	$comment=$_POST['ccomment'];
	session_start();
	if (isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		echo $username;
		$query="INSERT INTO comments VALUES(NULL,'$name','$username','$email','$comment')";
		mysql_query($query);
	}else{
		$query="INSERT INTO comments VALUES('NULL','$name','NULL','$email','$comment')";
		mysql_query($query);	
	}
	
	header('location: contact_us.php');
	
?>