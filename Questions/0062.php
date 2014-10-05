<?php

// Given the string:

$var = "john@php.net";

// Which of the following will extract the TLD (top level domain) of ".net" from the string?

/*

1) strstr($var, strpos($var, "."));
2) substr($var, strpos($var, "@"));
3) substr($var, strstr($var, "."));
4) substr($var, strpos($var, ".") + 1);
5) substr($var, strpos($var, "."));

*/

var_dump(
    substr($var, strpos($var, ".")),
    strstr($var, ".") // OR ;)
    );

