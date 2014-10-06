<?php

// What is the output of the following code block?

$a = "The quick brown fox jumped over the lazy dog.";

$b = array_map("strtoupper", explode(" ", $a));

foreach ($b as $value) {
    print "$value ";
}

/*

1) THE QUICK BROWN FOX JUMPED OVER THE LAZY DOG.
2) A PHP Error
3) Array Array Array Array Array Array Array Array Array

*/

