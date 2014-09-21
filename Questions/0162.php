<?php

// What is the output of the following code?

function oranges(&$oranges = 17) {
	$oranges .= 1;
}
$apples = 5;
oranges($apples);
echo $apples++;

