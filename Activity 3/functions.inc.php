<?php

function isOdd($input) {
    return abs($input) % 2 == 1;
}

function isPerfectSquare($input) {
    return sqrt($input) == floor(sqrt($input));
}

function isPrime($input) {
    if ($input <= 0) {
        return 0;
    }
    for ($i = 2; $i < 99; $i++) {
        if ($input % $i == 0 && $input != $i) {
            return 0;
        }
    }
    return 1;
}