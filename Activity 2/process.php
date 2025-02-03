<?php

echo "I am handsome";

$firstNum = $_GET["one"];
$secondNum = $_GET["two"];
$sum = $firstNum + $secondNum;

echo "<br><b>".$sum."</b>";

if ($firstNum < $secondNum) {
    for ($i = $firstNum; $i <= $secondNum; $i++) {
        if ($i % 2 == 0) {
            echo "<br><b>".$i."</b>";
        }
    }
} else {
    for ($i = $secondNum; $i <= $firstNum; $i++) {
        if ($i % 2 == 0) {
            echo "<br><b>".$i."</b>";
        }
    }
}


?>