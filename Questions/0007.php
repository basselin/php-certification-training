<?php

// What is the output of the following code?

$string = "111221";

for($i = 0; $i < strlen($string); $i++) {
    $current = $string[$i];
    $count = 1;
    
    while(isset($string[$i + $count]) && ($string[$i + $count] == $current)) $count++;
    
    $newstring .= "$count{$current}";
    
    $i += $count-1;
}

print $newstring;

/*

1) 312211							OK 3{1}2{2}1{1}
2) 3312212
3) 11221221
4) 221131
5) 3211122

*/

