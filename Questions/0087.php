<?php

// Setting a HTTP cookie on the client which is not URL-encoded is done how in PHP 5?

/*

1) Use the setrawcookie() function												http://php.net/manual/en/function.setrawcookie.php 
2) Set the cookies.urlencode INI directive to false
3) Use urldecode() on the return value of setcookie()
4) Setting the $no_encode parameter of setcookie() to a boolean 'true'
5) All cookies must be URL encoded

*/

