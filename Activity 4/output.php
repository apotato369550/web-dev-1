<?php

$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$errorMessage = "";

$errorMessage.="fname=".$firstName."&";
$errorMessage.="lname=".$lastName."&";
$errorMessage.="age=".$age."&";
$errorMessage.="gender=".$gender."&";

// .=
// +=
// *=

if (empty($firstName) || empty($lastName) || empty($age) || empty($gender)) {
    $errorMessage.="error=1";
    header("location: ./input.php?".$errorMessage);
    exit();
} else {
    header("location: ./congratulations.html");
    exit();
}



?>