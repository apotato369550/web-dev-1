<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yap";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO friends (first_name, last_name, age, height, address)
VALUES ('John', 'Doe', 21, 1.9, 'Mabolo')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>