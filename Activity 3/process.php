<?php

include "functions.inc.php";

$input = $_GET["input"];


// odd or even (easy)
if (isOdd($input)) {
    echo "The number: ".$input." is odd";
} else {
    echo "The number: ".$input." is even";
}

echo "<br>";

// perfect square (medium)
if (isPerfectSquare($input)) {
    echo "The number: ".$input." is a perfect square";
} else {
    echo "The number: ".$input." is not a perfect square";
}

echo "<br>";

// prime or composite
if (isPrime($input)) {
    echo "The number: ".$input." is prime";
} else if ($input <= 1){
    echo "The number: ".$input." is neither prime nor composite";
} else {
    echo "The number: ".$input." is composite";
}

echo "<br>";
echo "<a href='output.php?input=".$input."'>Link</a>";

?>

