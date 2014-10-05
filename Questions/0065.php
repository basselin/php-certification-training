<?php

// Which of the following is the best way to split a string on the "-=-" pattern?

/*

1) They all are equally proper methods
2) str_split($string, strpos($string, "-=-"))
3) preg_split("-=-", $string);
4) explode("-=-", $string);					OK ( with comma )

*/

$string = 'apple-=-banana-=-orange';

var_dump(
    str_split($string, strpos($string, "-=-")),
    preg_split('-=-', $string),
    explode('-=-', $string)
    );

