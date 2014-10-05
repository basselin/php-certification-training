<?php

// What would you replace ??????? with, below, to make the string Hello, World! be displayed?

function myfunction() {
    /* ??????? */
    print $string;
}

myfunction("Hello, World!");

/*

1) There is no way to do this
2) $string = $argv[1];
3) $string = $_ARGV[0];
4) list($string) = func_get_args();						OK or func_get_arg(0)
5) $string = get_function_args()

*/

