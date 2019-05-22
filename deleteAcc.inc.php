<?php

 session_start();

	if (isset($_POST['submit'])) {
     $dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "Piyush*1";
$dbName = "log_pro";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);


if(!$conn){
	die("Error" . mysqli_connect_error());
}

$useridDel = $_SESSION['u_id'];
echo $useridDel;
$sql = "DELETE FROM users WHERE user_id='$useridDel'";
mysqli_query($conn, $sql);


    
	session_unset();
	session_destroy();

	header("Location: ../section.php");
	exit();



	}
?>