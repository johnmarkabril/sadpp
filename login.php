<?php
	session_start();
	if ( empty($_SESSION["session_data"]) ) {
?>
		<!DOCTYPE HTML>
		<html lang="en-US">

			<head>
				<meta charset="UTF-8">
				<title>San Antonio de Padua Login Form</title>
				<link rel="stylesheet" href="style.css" />
				<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
				<script type="text/javascript" src="jquery-1.7.min.js"></script>
				 <link rel="shortcut icon" href="assets/ico/church.png">

			</head>
			<body>
				<div class="lg-container">
					<h1>Welcome</h1>
					<form action="process.php" id="lg-form" name="lg-form" method="post">
						
						<div>
							<label for="username">Username:</label>
							<input type="text" name="username" id="username" placeholder="username"/>
						</div>
						
						<div>
							<label for="password">Password:</label>
							<input type="password" name="password" id="password" placeholder="password" />
						</div>
						
						<div>				
							<button type="submit" name="Submit"  id="login">Login</button>
						</div>
						<div>
						<center>
						<div id="lg-form">	
							<a href="signup.php" class="btn btn-link" >Sign Up</a>
							
						</div>
						</center>
					</form>
					<div id="message"></div>
				</div>
			</body>
</html>
<?php
	} else {
?>
		<script>window.location="home.php"</script>
<?php
	}
?>