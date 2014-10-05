<?php

// Consider the following function:

function redirect($url) {
    // Check to make sure we haven't already sent
    // the header:

    if(/*???????*/) {
        header("Location: $url");
    }
}

// What conditional should replace the ????? above?

/*

1) !in_array("Location: $url", headers_list())					http://php.net/manual/en/function.headers-list.php
2) !header_exists("Location: $url")
3) !header_location($url)
4) $_SERVER['HTTP_LOCATION'] != $url

*/

