<?php

class Php4
{
    function php4()
    {
        echo __METHOD__ . "\n";
    }
}

$v4 = new Php4();
$v4->php4();


echo "<hr />\n";


class Php5
{
    function php5()
    {
        echo __METHOD__ . "\n";
    }

    function __construct() // Error Strict standards: if php5() is before here
    {
        echo __METHOD__ . "\n";
    }
}

$v5 = new Php5();
$v5->php5();

