<?php

$a = ['z', 'x'];
$b = ['y', 'w'];

$c = ['a' => 1, 'b' => 2];
$d = ['c' => 3, 'd' => 4];

$e = $a + $b;
$f = $c + $d;
$g = $a + $c;

var_dump($e, $f, $g);

echo '<hr />';

$e = array_merge($a, $b);
$f = array_merge($c, $d);
$g = array_merge($a, $c);

var_dump($e, $f, $g);

