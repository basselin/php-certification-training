<?php

// What is the output of the following?

function a(&$apples) {
	$apples++;
}

$oranges = 5;
$apples = 5;
a($oranges);

echo "I have $apples apples and $oranges oranges";

