<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Cashier!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        session_start();
        if (empty($_SESSION["account_type"]) || $_SESSION["account_type"] != "cashier") {
            header("Location: ../index.php");
        }
    ?>
    <h1>Welcome Cashier <?php echo $_SESSION["username"] ?>!</h1>

    <a href="../logout.php">Logout</a>
</body>
</html>