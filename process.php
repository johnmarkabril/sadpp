<?php
	session_start();
	if ( isset($_POST['Submit']) ) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		include "connection.php";
		$result = mysql_query("SELECT * FROM login");
		if ( mysql_num_rows($result) >= 1 ) {
			while($row = mysql_fetch_array($result)){
				if ($row['username'] == $username && $row['password'] == $password ){
						print "Login success!!! Welcome".$row['username'];
						$_SESSION["session_data"] = $row;

						header('location: home.php');
						print "asdf";
				}
			}
		} else {
			header('Location: login.php');
		}
		
	} else {
		header('login.php');
	}
?>