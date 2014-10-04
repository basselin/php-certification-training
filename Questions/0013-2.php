<?php

// What is the output of the following?

$a = 20;

function myfunction($b) {
    global $a, $c;
    $a = 30;
    return $c = ($b + $a);
}

// 140 = (40 + 30) + 70
print myfunction(40) + $c;

