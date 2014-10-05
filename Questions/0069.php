<?php

// Identify the best approach to compare to variables in a binary-safe fashion

/*

1) Both strcmp() and $a === $b					http://php.net/manual/en/function.strcmp.php
2) $a == $b
3) $a === $b
4) str_compare()
5) strstr()

*/

