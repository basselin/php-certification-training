<?php

define('MY_CONSTANT', 0);

var_dump(
    empty(MY_CONSTANT) // Syntax error with PHP 5.3 ???    >> TRUE with PHP 5.5 :)
);
