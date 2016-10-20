<?php
	require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home - MCP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/skeleton.css">
  <script src="https://use.fontawesome.com/c3611e739e.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
  <div class="container">
		<div class="twelve coloumn">
			<h3>Hello: <b><?php echo $u_login_session;?></b></h3>
		</div>
	</div>
</body>
</html>