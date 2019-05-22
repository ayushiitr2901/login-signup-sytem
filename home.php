<?php 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
	<title>first form</title>
</head>
<body>
	<header>
		<div><a href="section.php" id="begin">Home</a></div>
		<div class="right">

			<?php

			if (isset($_SESSION['u_id'])) {
			echo '<form action="include/logout.inc.php" method="POST">
				<button type="submit" name="submit" class="formin" id="xd">Log Out</button>
				</form>
				<form action="include/deleteAcc.inc.php" method="POST">
				<button type="submit" name="submit" class="formin" id="xd">Delete Account</button>
			     </form>';
			}else{

				echo '<form action="include/login.inc.php" method="POST">
				<input class="formin" type="text" name="uid" placeholder="username/email">
				<input class="formin" type="password" name="pwd" placeholder="password">
				<button class="formin" type="submit" name="submit" id="xd">Login</button>
			</form>
			<button class="formin" id="xd"><a href="signup.php" id="sigbut">Sign Up</a></button>';
			}
			?>
			
			
		</div>
	</header>
	<hr>
	
    