<?php

// Given the following PHP script:


$xmldata = <<< XML
<?xml version="1.0" encoding="ISO-8859-1" ?>
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>XML Example</title>
  </head>
  <body>
    <p>
      <b>Hello, World!</b>
    </p>
  </body>
</html>
XML;

$sxe = simplexml_load_string($xmldata);

$p = $sxe->body->p;

$string = ????????

print $string;

// What should go in place of ????? above to print the string Hello, World! (with no leading/trailing whitespace or markup)?

/*

1) trim(($p[1]));
2) trim(strip_tags(($p->asText())));
3) trim(strip_tags(($p->asXML())));		// http://php.net/manual/en/class.simplexmlelement.php
4) trim(($p->asXML()));
5) strip_tags(($p->asXML()));
 
*/

