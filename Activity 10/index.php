<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Database Access Example</title>
</head>
<body>
    <?php 
    include "dbh.inc.php";

    $sql = "SELECT * FROM users";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error when preparing SQL statement.";
    }

    if (!mysqli_stmt_execute($stmt)) {
        echo "Error while executing SQL statement";
    }

    $results = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($results)) {
        $userId = $row["id"];
        $username = $row["username"];
        $password = $row["password"];
        $motto = $row["motto"];
        ?>

        <h1>User #<?php echo $userId ?></h1>
        <p>Username: <?php echo $username ?></p>
        <p>Password: <?php echo $password ?></p>
        <p>Motto: <?php echo $motto ?></p>

        <?php
    }
    ?>
</body>
</html>