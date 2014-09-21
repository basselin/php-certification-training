<?php

// What is the output of?

function apple(&$apples = 4) {
	$apples = $apples / 2;
	return $apples;
}

$apples = 10;
apple($apples);
echo $apples;

