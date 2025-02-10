<?php

$admin_username = "admin";
$admin_password = "admin123";

$cashier_accounts = [
    ["username" => "cashier1", "password" => "cashier1"],
    ["username" => "cashier2", "password" => "cashier2"],
    ["username" => "cashier3", "password" => "cashier3"],
];

$client_accounts = [
    ["username" => "client1", "password" => "client1"],
    ["username" => "client2", "password" => "client2"],
    ["username" => "client3", "password" => "client3"],
];

$username = $_POST["username"];
$password = $_POST["password"];

if ($username === $admin_username && $password === $admin_password) {
    header("Location: ./admin.html");
    exit();
} 

$cashier_account_found = False;

for ($i = 0; $i < count($cashier_accounts); $i++) {
    $current_account = $cashier_accounts[$i];
    if ($current_account["username"] === $username && $current_account["password"] === $password) {
        $cashier_account_found = True;
        break;
    }
}

if ($cashier_account_found) {
    header("Location: ./cashier.html");
    exit();
}

$client_account_found = False;

for ($i = 0; $i < count($cashier_accounts); $i++) {
    $current_account = $client_accounts[$i];
    if ($current_account["username"] === $username && $current_account["password"] === $password) {
        $client_account_found = True;
        break;
    }
}

if ($client_account_found) {
    header("Location: ./client.html");
    exit();
} else {
    header("Location: ./index.php?username=".$username."&error=1");
}

?>