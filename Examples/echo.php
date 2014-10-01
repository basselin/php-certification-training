<?php

// echo or print
function _echo($string)
{
    $out = fopen('php://output', 'w');
    fwrite($out, $string);
    fclose($out);
}

_echo('Hello php://output!');

