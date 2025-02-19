<?php

$username = $_POST["username"];
$password = $_POST["password"];

include "dbh.inc.php";

if (empty($username)) {
    echo "Error: Empty username";
    // header("Location: ../index.php?error=login");
    exit();
}

if (empty($password)) {
    echo "Error: Missing password";
    // header("Location: ../index.php?error=login");
    exit();
}

$stmt = mysqli_stmt_init($connection);
$sql = "SELECT * from users WHERE username=?";

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Error when preparing SQL statement.";
    // header("Location: ../index.php?error=login");
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $username);

if (!mysqli_stmt_execute($stmt)) {
    echo "Error while executing SQL statement";
    // header("Location: ../index.php?error=login");
    exit();
}

$results = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($results);

if(!$row){
    echo "account not found";
    // header("Location: ../index.php?error=login");
    exit();	
}

if ($password !== $row["password"]) {
    echo "invalid password";
    // header("Location: ../index.php?error=login");
    exit();	
}


if ($row["account_type"] === "admin") {
    session_start();
    $_SESSION["account_type"] = $row["account_type"];
    $_SESSION["username"] = $username;
    header("Location: ../admin/admin.php");
} 

if ($row["account_type"] === "cashier") {
    session_start();
    $_SESSION["account_type"] = $row["account_type"];
    $_SESSION["username"] = $username;
    header("Location: ../cashier/cashier.php");

} 

if ($row["account_type"] === "client") {
    session_start();
    $_SESSION["account_type"] = $row["account_type"];
    $_SESSION["username"] = $username;
    header("Location: ../cashier/client.php");
} 