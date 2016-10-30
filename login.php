<?php
	ob_start();
	require 'config.php';
	require 'hash.php';

	session_start();

	$error = "";

	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is incorrect";
		} else {
			$username=$_POST['username'];
			$password=$_POST['password'];
		
			$con = mysqli_connect($dbserver, $dbusername, $dbpassword);
			
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($con, $username);
			$password = mysqli_real_escape_string($con, $password);
			$password = hashPassword($password); // this function is located in hash.php

			$db = mysqli_select_db($con, $dbdatabase);

			$q = mysqli_query($con, "select * from $dbtable where password='$password' AND username='$username'");
			$rows = mysqli_num_rows($q);
	
			if ($rows == 1) {
				$_SESSION['login_user'] = $username;
				$_SESSION['login_password'] = $password;
				header("Location: $redirectto");
			} else {
				$error = "Your account does not exist, please contact a developer";
			}
			
			mysqli_close($con);
		}
	}
?>