<?php

// What is the output of the following?

$a = 20;

function myfunction($b) {
    $a = 30;
    
    global $a, $c;
    return $c = ($b + $a);
}

print myfunction(40) + $c;

/*

1) 120							OK ( (40 + 20) + 60 )
2) Syntax Error
3) 60
4) 70

*/

