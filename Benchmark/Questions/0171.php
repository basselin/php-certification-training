<?php

// What is the output of the following?

function a($number) {
	return (b($number) * $number);
}

function b(&$number) {
	++$number;
}

echo a(5);

