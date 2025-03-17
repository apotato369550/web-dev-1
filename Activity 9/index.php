<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="main.js"></script>
    <title>Registration Page</title>
</head>
<body>
    <div class="register-form-container">
        <div class="register-form">
            <form action="register.inc.php" method="post">
                <h1>Register</h1>
                <label for="first-name">First Name</label>
                <input type="text" name="first-name" id="first-name" placeholder="i.e. John">
                <br>
                <label for="last-name">Last Name</label>
                <input type="text" name="last-name" id="last-name" placeholder="i.e. Doe">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="i.e. john.doe@email.com">
                <span class="error-message" id="email-error-message"></span>
                <br>
                <label for="age">Age</label>
                <input type="text" name="age" id="age" placeholder="i.e. 42">
                <span class="error-message" id="age-error-message"></span>
                <br>
                <label for="password">Password 1</label>
                <input type="password" name="password" id="password">
                <br>
                <label for="password-repeat">Password 2</label>
                <input type="password" name="repeat-password" id="repeat-password">
                <span class="error-message" id="password-error-message"></span>
                <br>
                <button type="button" id="clear-button">Clear</button>
                <button type="submit" id="submit-button" name="submit-button">Submit</button>
                <br>
                <?php 
                if (isset($_GET["error"])) {
                    $error = $_GET["error"];
                    if ($error === "sqlprepare") {
                        ?>
                        <p class="error-message">Error in preparing sql statement.</p>
                        <?php
                    } else if ($error === "sqlexecute") {
                        ?>
                        <p class="error-message">Error in executing sql statement.</p>
                        <?php
                    } else if ($error === "emailinuse") {
                        ?>
                        <p class="error-message">That email is already in use. Please select another email.</p>
                        <?php
                    }
                }

                if (isset($_GET["registration"])) {
                    $registration = $_GET["registration"]
                    if ($registration === "success") {
                        ?>
                        <p class="success-message">Registration Success!</p>
                        <?php
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>