<!DOCTYPE html>
<html lang="en">
<head>
    <title>Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    include "functions.inc.php";
    $input = $_GET["input"];

    ?>
    <div class="odd">
        <h1> Odd </h1>
        <?php 
        
        if (isOdd($input)) {
            echo "<p>".$input."</p>";
        }

        ?>
    </div>
    <div class="even">
        <h1> Even </h1>
        <?php 
        
        if (!isOdd($input)) {
            echo "<p>".$input."</p>";
        }

        ?>
    </div>
    <div class="ps">
        <h1> Perfect Square </h1>
        <?php 
        
        if (isPerfectSquare($input)) {
            echo "<p>".$input."</p>";
        }

        ?>
    </div>
    <div class="prime">
        <h1> Prime </h1>
        <?php 
        
        if (isPrime($input)) {
            echo "<p>".$input."</p>";
        }

        ?>
    </div>
</body>
</html>