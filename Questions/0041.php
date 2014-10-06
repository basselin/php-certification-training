<?php

// Consider the following code:

header("Location: {$_GET['url']}");

// Which of the following values of $_GET['url'] would cause session fixation?

/*

1) Session Fixation is not possible with this code snippet
2) http://www.zend.com/?PHPSESSID=123											OK
3) PHPSESSID%611243
4) Set-Cookie%3A+PHPSESSID%611234
5) http%3A%2F%2Fwww.zend.com%2F%0D%0ASet-Cookie%3A+PHPSESSID%611234

*/

