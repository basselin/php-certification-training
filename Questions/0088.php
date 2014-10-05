<?php

// During an HTTP authentication, how does one determine the username and password provided by the browser?

/*

1) Parse the HTTP headers manually using http_get_headers()
2) Use the get_http_username() and get_http_password() functions
3) Use the $_SERVER['HTTP_USER'] and $_SERVER['HTTP_PASSWORD'] variables
4) Use the $_SERVER['PHP_AUTH_USER'] and $_SERVER['PHP_AUTH_PW'] variables				http://php.net/manual/en/features.http-auth.php
5) Parse the $_SERVER['REQUEST_URI'] variable

*/

