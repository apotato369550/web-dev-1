<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include "includes/users.inc.php";
        session_start();
        if (empty($_SESSION["users"])) {
            $_SESSION["users"] = $users;
        }
    ?>
    <div class="div1">
        <h1>Register</h1>
        <form action="registration.php" method="post">
            <h1>Login</h1>
            <label for="username">Username: </label>
            <input type="text" name="username"">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <label for="account-type">Account Type</label>
            <select name="account-type">
                <option value="admin">Admin</option>
                <option value="cashier">Cashier</option>
                <option value="client">Client</option>
            </select>
            <br>
            <input type="submit" name="submit">
            <?php
            if (!empty($_GET["error"]) && $_GET["error"] == "register") {
                echo "<p class='error'>Username already in use. Please use another username</p>";
            }

            if (!empty($_GET["registration"]) && $_GET["registration"] == "successful") {
                echo "<p class='success'>Registration successful!</p>";
            }
            ?>
        </form>
    </div>
    <div class="div2">
        <form action="verification.php" method="post">
            <h1>Login</h1>
            <label for="username">Username: </label>
            <input type="text" name="username" value="<?php if (!empty($_GET["username"]) && $_GET["error"] == "login") { echo $_GET["username"]; } ?>">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <input type="submit" name="submit">
            <?php
            if (!empty($_GET["error"]) && $_GET["error"] == "login") {
                echo "<p class='error'>Invalid credentials. Please login using a valid account</p>";
            }
            ?>
        </form>
    </div>
    <div class="div3"></div>
    <div class="div4"></div>
</body>
</html>