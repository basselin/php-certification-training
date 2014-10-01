<?php

$a = [1, 2, 3,];
foreach ($a as $x) {
    $x *= 2;
}

var_dump(
    $$a[0], // NOTICE
    $a[1],
    $a[2],
    $$a[0] * $a[1] * $a[2], // NOTICE
    $a[0] * $a[1] * $a[2]
);

