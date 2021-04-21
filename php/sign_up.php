<?php
		require 'connect.inc.php';
		$current_file = $_SERVER['SCRIPT_NAME'];
		
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$contact = $_POST['tel'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];
			$month = $_POST['month'];
			$date = $_POST['date'];
			$year = $_POST['year'];
			$al1 = $_POST['al1'];
			$al2 = $_POST['al2'];
			$city = $_POST['city'];
			
			$dob = ($year.'-'.$month.'-'.$date);
			
			$query="insert into user values(NULL,'$fname','$lname','$email','$gender','$dob','$al1','$al2','$city','$contact')";
			mysql_query($query);
			$query1="select `user_id` from user where fname='$fname' and lname='$lname'";
 			$run = mysql_query($query1);
	 		$rown = mysql_num_rows($run);
		 	$user_id = mysql_result($run,0,'user_id');
			$query2="insert into user_account values('$username','$user_id','$password')";
			mysql_query($query2);
		 	session_start();
		 	$_SESSION['username']=$username;
		 	header('location: ../index.php');
	 		
		
?>
	


