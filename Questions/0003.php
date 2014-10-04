<?php

/*

// What is the best way to iterate and modify every element of an array using PHP 5?

1) You cannot modify an array during iteration
2) for($i = 0; $i < count($array); $i++) { /* ... * / }
3) foreach($array as $key => &$val) { /* ... * / }						OK
4) foreach($array as $key => $val) { /* ... * / }
5) while(list($key, $val) = each($array)) { /* ... * / }

*/

