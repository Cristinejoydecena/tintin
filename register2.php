<?php
	require 'conn2.php';
	
	if(ISSET($_POST['register'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	
		
		mysqli_query($conn, "INSERT INTO `admin` VALUES('','$username', '$password')") or die(mysqli_error());
		echo "<h3 class='text-success'>User account registered!</h3>";
	}
?>