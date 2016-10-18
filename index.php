<?php
	require 'login.php';
	require 'config.php';
	if(isset($_SESSION['login_user'])){
		header("location: $redirectto");
		$error = "";
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login - MCP</title>
    <link rel="stylesheet" href="assets/css/loginpage.css">
  </head>
  <body>
  	<div class="login-page">
  		<div class="form">	
    		<form class="login-form" action="" method="post">
          <input type="text" placeholder="username" name="username"/>
					<input type="password" placeholder="password" name="password"/>
					<button name="submit" type="submit">login</button>
					<p style="color: red;"><?php echo $error; ?></p>
    		</form>
  		</div>
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </body>
</html>