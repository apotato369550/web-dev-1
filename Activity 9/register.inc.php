<?php

$firstName = $_POST["first-name"];
$lastName = $_POST["last-name"];
$email = $_POST["email"];
$age = $_POST["age"];
$password = $_POST["password"];

if (!isset($_POST["submit-button"])) {
    header("Location: index.php?error=nosubmit");
    exit;
}

include "dbh.inc.php";

$sql = "SELECT * FROM users WHERE email=?";
$stmt = mysqli_stmt_init($connection);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: index.php?error=sqlprepare");
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $email);

if (!mysqli_stmt_execute($stmt)) {
    header("Location: index.php?error=sqlexecute");
    exit();
}

$results = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($results);

if ($row) {
    header("Location: index.php?error=emailinuse");
    exit();
}

$sql = "INSERT INTO users (first_name, last_name, email, age, password) VALUES (?, ?, ?, ?, ?)";

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: index.php?error=sqlprepare");
    exit();
}

mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $age, $password);

if (!mysqli_stmt_execute($stmt)) {
    header("Location: index.php?error=sqlexecute");
    exit();
}

header("Location: index.php?registration=success");
exit();