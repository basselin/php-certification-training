<?php

// What is the best approach for converting this string:

$string = "a=10&b[]=20&c=30&d=40+50";

// Into this array?

array(4) {
  ["a"]=>
  string(2) "10"
  ["b"]=>
  array(1) {
    [0]=>
    string(2) "20"
  }
  ["c"]=>
  string(2) "30"
  ["d"]=>
  string(5) "40 50"
}

/*

1) Write a parser completely by hand, it's the only way to make sure it's 100% accurate
2) Use the parse_str() function to translate it to an array()																http://php.net/manual/en/function.parse-str.php
3) Pass the variable to another PHP script via an HTTP GET request and return the array as a serialized variable
4) Just call unserialize() to translate it to an array()
5) Write a string parser using strtok() and unserialize() to convert it to an array

*/

