<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Information Input</title>
</head>
<body>
    <div class="form-container">
        <h1>Information Input</h1>
        <form method="post" action="output.php">
            <label for="fname">First name:</label>
            <br>
            <input type="text" id="fname" name="fname" value="<?php if (!empty($_GET["fname"])) { echo $_GET["fname"]; }  ?>">
            <?php
                if (empty($_GET["fname"]) && !empty($_GET["error"])) {
                    echo "<span class='error'>*</span>";
                }
            ?>
            <br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="<?php if (!empty($_GET["lname"])) { echo $_GET["lname"]; }  ?>">
            <?php
                if (empty($_GET["lname"]) && !empty($_GET["error"])) {
                    echo "<span class='error'>*</span>";
                }
            ?>
            <br>
            <label for="name">Age</label>
            <select name="age">
                <option value="">Select</option>
                <?php 
                for($i = 1; $i <= 100; $i++) {
                    echo "<option value='".$i."'";
                    if (!empty($_GET["age"]) && $_GET["age"] == $i) {
                        echo " selected='selected'";
                    }
                    echo ">".$i."</option>";
                }
                ?>
            </select>
            <?php
                if (empty($_GET["age"]) && !empty($_GET["error"])) {
                    echo "<span class='error'>*</span>";
                }
            ?>
            <br>
            <div class="gender-selection">
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male" id="male" <?php if(!empty($_GET["gender"]) && $_GET["gender"] == "male") { echo "checked"; } ?> />
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female" <?php if(!empty($_GET["gender"]) && $_GET["gender"] == "female") { echo "checked"; } ?> />
                <label for="male">Female</label>
                <?php
                    if (empty($_GET["gender"]) && !empty($_GET["error"])) {
                        echo "<span class='error'>*</span>";                
                    }
                ?>
            </div>
            <input type="submit" value="Submit">
            <?php 
            if (!empty($_GET["error"])) {
                echo "<p class='error'> Please fill out all fields. </p>";
            }
            ?>
        </form>
    </div>
</body>
</html>