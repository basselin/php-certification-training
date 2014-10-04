<?php

// What combination of boolean values for $a, $b, $c, and $d will result in the variable $number being equal to 3?

$a = null;
$b = null;
$c = null;
$d = null;

if($a && !$b) {
  if(!!$c && !$d) {
    if($d && ($a || $c)) {
      if(!$d && $b) {
        $number = 1;
      } else {
        $number = 2;
      }
    } else {
      $number = 3;
    }
  } else {
    $number = 4;
  }
} else {
  $number = 5;
}

/*

1) false, true, true, true
2) true, false, true, false							OK
3) true, true, false, false
4) false, true, true, false
5) false, false, true, false

*/

//var_dump($number);

