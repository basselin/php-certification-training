<?php

// What does the following function do, when passed two integer values for $p and $q?

function magic($p, $q) {
    return ($q == 0)
       ? $p
       : magic($q, $p % $q);
}

/*

1) Loops infinitely
2) Switches the values of $p and $q
3) Determines if they are both even or odd
4) Determines the greatest common divisor between them							OK
5) Calculates the modulus between the two

*/

var_dump(
    magic(4, 2),
    magic(69, 78)
);

