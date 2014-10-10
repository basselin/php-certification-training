<?php

var_dump(
    strlen(0), // 1
    strlen(''), // 0
    strlen(null), // 0
    strlen(false), // 0
    strlen([]) // WARNING
);
