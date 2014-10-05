<?php

// Consider the following code block:

function &myFunction() {
    $string = "MyString";
    var_dump($string);

    return ($undefined);
}

for ($i = 0; $i < 10; $i++) {
    $retval = myFunction();
}

// This code block's behavior has changed between PHP 4 and PHP 5. Why?

/*

1) None of the above																				OK
2) This could would cause an automatic segmentation fault in PHP 4
3) This code would throw a syntax error in PHP 4
4) Returning an undefined variable by reference in PHP 4 would cause eventual memory corruption
5) You could not return undefined variables by reference in PHP 4

*/

