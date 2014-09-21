<?php

// What is the output of the following?

function x10(&$number) {
	$number *= 10;
}

$count = 5;
x10($count);
echo $count;

