<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","postages_demo");
	
	if (mysqli_connect_errno()) {

		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}

?>