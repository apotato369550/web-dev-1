<?php

$username = $_POST["username"];
$password = $_POST["password"];
$accountType = $_POST["account-type"];

session_start();

foreach($_SESSION["users"] as $currentUser) {
    if ($username === $currentUser[0]) {
        header("Location: ./index.php?error=register");
        exit();
    }
}

$newAccount = array($username, $password, $accountType, $accountType.".php");
array_push($_SESSION["users"], $newAccount);

header("Location: ./index.php?registration=successful");
exit();

?>