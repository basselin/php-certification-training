<?php

// Consider the following String:

$string = "John\tMark\nTed\tLarry";

// Which of the following functions would best parse the string above by the tab (\t) and newline (\n) characters?

/*

1) strsplit($string, "\t\n");
2) strtok($string, "\t\n");					http://php.net/manual/en/function.strtok.php
3) strstr($string, "\t\n");
4) explode("\t\n", $string);
5) All of the above

*/

var_dump(
    strtok($string, "\t\n"),
    strtok("\t\n"),
    strtok("\t\n"),
    strtok("\t\n"),
    strtok("\t\n")
    );

