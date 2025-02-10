<?php

$users = array(
    array("John", "gwapo", "admin", "admin.html"),
    array("James", "bright", "cashier", "cashier.html"),
    array("Peter", "cute", "cashier", "cashier.html"),
    array("Joseph", "buotan", "client", "client.html"),
    array("Jack", "stylish", "client", "client.html")
);

$username = $_POST["username"];
$password = $_POST["password"];

for ($i = 0; $i < count($users); $i++) {
    $currentUsername = $users[$i][0];
    $currentPassword = $users[$i][1];
    $userType = $users[$i][2];
    $redirect = $users[$i][3];
    if ($username === $currentUsername && $password === $currentPassword) {
        header("Location: ".$redirect);
        exit();
    }
}

header("Location: index.php?username=".$username."&error=1");
exit();
?>