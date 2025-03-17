<?php

$serverName = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "registration_page";

$connection = mysqli_connect($serverName, $databaseUsername, $databasePassword, $databaseName);

	
if (!$connection){
	echo "Error: Database connection Failed";
	exit("Connection failed: ".mysqli_connect_error());
} 