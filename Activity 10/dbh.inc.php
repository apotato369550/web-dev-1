<?php

$serverName = "10.16.43.32";
$databaseUsername = "yap";
$databasePassword = "andre510";
$databaseName = "test";

$connection = mysqli_connect($serverName, $databaseUsername, $databasePassword, $databaseName);

	
if (!$connection){
	echo "Error: Database connection Failed";
	exit("Connection failed: ".mysqli_connect_error());
} 