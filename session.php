<?php
	require 'config.php';
	 
	$con = mysqli_connect($dbserver, $dbusername , $dbpassword);
	$db = mysqli_select_db($con, $dbdatabase);
	session_start();// Starting Session
	
	$user_check=$_SESSION['login_user'];
	$u_ses_sql=mysqli_query($con, "select username from $dbtable where username='$user_check'");
	$u_row = mysqli_fetch_assoc($u_ses_sql);
	$u_login_session =$u_row['username'];
	
	$pass_check=$_SESSION['login_password'];
	$p_ses_sql=mysqli_query($con, "select password from $dbtable where password='$pass_check'" );
	$p_row = mysqli_fetch_assoc($p_ses_sql);
	$p_login_session =$p_row['password'];
	
	if(!isset($u_login_session) || !isset($p_login_session)){
		mysqli_close($con);
		header("Location: index.php");
	}
?>