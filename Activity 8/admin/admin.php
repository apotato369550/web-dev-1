<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        session_start();
        if (empty($_SESSION["account_type"]) || $_SESSION["account_type"] != "admin") {
            header("Location: ../index.php");
        }
    ?>
    <h1>Welcome Admin <?php echo $_SESSION["username"] ?>!</h1>

    <a href="../logout.php">Logout</a>
</body>
</html>