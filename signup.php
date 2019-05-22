<?php
include_once 'home.php'
?>

<section class="section">
		<h1> Sign Up </h1>
		<form class="form" action="include/signup.inc.php" method="POST"> 
			<input type="text" name="first" placeholder="First Name">
			<input type="text" name="last" placeholder="Last Name">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>

		</form>
	</section>




















<?php
include_once 'footer.php'
?>

