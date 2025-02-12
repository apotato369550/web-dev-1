<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

foreach($_SESSION["users"] as $currentUser) {
    $currentUsername = $currentUser[0];
    $currentPassword = $currentUser[1];
    $accountType = $currentUser[2];
    $redirect = $currentUser[3];
    echo "Current username: ".$currentUsername;
    echo "<br>";
    echo "User: ".$username;
    echo "<br>";
    echo "Current password: ".$currentPassword;
    echo "<br>";
    echo "Password: ".$password;
    echo "<br>";
    if ($currentUsername === $username && $currentPassword === $password) {
        echo "FOUND!!!";
        echo "<br>";
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["account_type"] = $accountType;
        header("Location: ./".$accountType."/".$redirect);
        exit();
    }
}
header("Location: ./index.php?username=".$username."&error=login");
exit();
?>