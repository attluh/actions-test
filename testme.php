<?php

// Update this file and PR to main to run the phpcs Github Action.

function defyTheStandard() {
    return "This function is a new symbol declaration." . PHP_EOL;
}

echo ${defyTheStandard()};
echo "Oops, that statement was a side effect." . PHP_EOL;