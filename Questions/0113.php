<?php

// Consider the following code snippet:

$link = mysqli_connect("hostname", 
                       "username",
                       "password");

if(!$link)
{
    /* $error = ??????; */
    die("Could not connect to the database: $error");
}

// What would go in place of the ???? above for this script to function properly?

/*

1) mysqli_connect_error();					http://php.net/manual/en/mysqli.connect-error.php
2) mysqli_connect_error($link);
3) mysqli_error();
4) $_MySQL['connect_error']
5) mysqli_get_connect_error();

*/

