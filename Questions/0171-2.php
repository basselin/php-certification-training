<?php

// What is the output of the following?

function a($number) {
	return (b($number) * $number);
}

function b(&$number) {
	return ++$number;
}

echo a(5);

