<?php

// What is the output of the following?

function l(&$number) {
	$number *= 10;
	return ($number - 5);
}

$number = 10;
$number = L($number);
echo $number;

