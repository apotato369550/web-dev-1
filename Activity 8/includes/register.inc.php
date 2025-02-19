<?php

$username = $_POST["username"];
$password = $_POST["password"];
$accountType = $_POST["account-type"];

include "dbh.inc.php";

if (empty($username)) {
    echo "Error: Empty username";
    header("Location: ../index.php?error=register");
    exit();
}

if (empty($password)) {
    echo "Error: Missing password";
    header("Location: ../index.php?error=register");
    exit();
}

if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    echo "Error: Username should not contain special characters";
    header("Location: ../index.php?error=register");
    exit();
}

$stmt = mysqli_stmt_init($connection);
$sql = "SELECT username from users WHERE username=?";

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Error when preparing SQL statement.";
    header("Location: ../index.php?error=register");
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $username);

if (!mysqli_stmt_execute($stmt)) {
    echo "Error while executing SQL statement";
    header("Location: ../index.php?error=register");
    exit();
}

mysqli_stmt_store_result($stmt);
$results = mysqli_stmt_num_rows($stmt);

if($results > 0){
    echo "Error: Username already in use";
    header("Location: ../index.php?error=register");
    exit();	
}

$sql = "INSERT INTO users (username, password, account_type) VALUES (?, ?, ?)";

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Error when preparing SQL statement. 2";
    header("Location: ../index.php?error=register");
    exit();
}

mysqli_stmt_bind_param($stmt, "sss", $username, $password, $accountType);

if (!mysqli_stmt_execute($stmt)) {
    echo "Error while executing SQL statement 2";
    header("Location: ../index.php?error=register");
    exit();
}

echo "Registration Successful!";
header("Location: ../index.php?registration=successful");
exit();