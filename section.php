<?php
include_once 'home.php'
?>

<section class="section">
		<h1> This is the home</h1>

<?php

if (isset($_SESSION['u_id'])) {
	echo "You are now logged in!";
}

?>

	</section>
<?php
include_once 'footer.php'
?>





