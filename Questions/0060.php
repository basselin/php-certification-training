<?php

// What variable reference would go in the spots indcated by ????? in the code segment below?

$msg = "The Quick Brown Foxed Jumped Over the Lazy Dog";

$state = true;
$retval = "";
for ($i = 0; (isset(??????)); $i++) {
    if($state) {
        $retval .= strtolower(?????);
    } else {
        $retval .= strtoupper(?????);
    }
    $state = !$state;
}

print $retval;


/*

1) $msg{$i}						OK == $msg[$i]
2) ord($msg);
3) chr($msg);
4) substr($msg, $i, 2);

*/

