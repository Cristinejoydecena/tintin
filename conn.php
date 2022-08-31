<?php
	$conn = mysqli_connect("localhost", "root", "", "pshop");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>