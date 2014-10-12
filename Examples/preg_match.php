<?php

$string = "There's a moose loose about this house";
$matches = array();

$pattern = '/ \w*?[aeiouy]{2}\w*? /';
//$pattern = '/ (\w*?([aeiouy]{2})\w*?) /';
var_dump(
    $pattern, $string,
    preg_match($pattern, $string, $matches),
    $matches
);

echo "<hr />";

$pattern = '/ \w*?[aeiouy]{2}\w*? /';
var_dump(
    $pattern, $string,
    preg_match_all($pattern, $string, $matches),
    $matches
);

echo "<hr />";

$pattern = '/ (\w*?([aeiouy]{2})\w*?)/';
var_dump(
    $pattern, $string,
    preg_match_all($pattern, $string, $matches),
    $matches
);

