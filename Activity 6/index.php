<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div1"></div>
    <div class="div2">
        <form action="verification.php" method="post">
            <label for="username">Username: </label>
            <input type="text" name="username" value="<?php if (!empty($_GET["username"])) { echo $_GET["username"]; } ?>">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <br>
            <input type="submit" name="submit">
            <?php
            if (!empty($_GET["error"])) {
                echo "<p class='error'>Invalid credentials. Please login using a valid account</p>";
            }
            ?>
        </form>
    </div>
    <div class="div3"></div>
    <div class="div4"></div>
</body>
</html>