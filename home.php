<?php
	require 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<p>Welcome <?php echo $u_login_session; ?></p>
	<a href="logout.php">Logout?</a>
</body>
</html>