<?php
		require 'connect.inc.php';
		$current_file = $_SERVER['SCRIPT_NAME'];
		
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$query="select `username`,`password`,`user_id` from user_account where username='$user' AND password='$pass'";

 		if ($run = mysql_query($query)){
	 		$rown = mysql_num_rows($run);
	 		if($rown==0){
		 		
	 		}else{
		 		$user_name = mysql_result($run,0,'username');
		 		session_start();
		 		$_SESSION['username']=$user_name;
				$cartquery = "create table ".$user_name."(pid int,pname varchar(30),price double,primary key(pid),FOREIGN KEY ( `pid` ) REFERENCES `musicstore`.`album` (`a_id`))";
				mysql_query($cartquery);
		 		header('location: ../index.php');
	 		}
 		}
	
?>
