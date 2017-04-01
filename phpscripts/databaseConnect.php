<?php
	$serverName = "localhost";
	$dbName = "chillflix";

	// Create connection
	$conn = new mysqli($serverName, "root", "", $dbName);
	// Check connection
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
?>