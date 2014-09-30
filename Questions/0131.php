<?php

// Consider the following PHP script fragment:

$title = $dom->createElement('title');
$node = ????????

$title->appendChild($node);
$head->appendChild($title);

// What should ??????? be replaced with to add a <title> node with the value of Hello, World!

/*

1) $dom->createTextNode("Hello, World");
2) $dom->appendElement($title, "text", "Hello, world!");
3) $dom->appendTextNode($title, "Hello, World!");						// http://php.net/manual/en/domdocument.createtextnode.php
4) $dom->createElement('text', "Hello, World");
5) None of the above 

*/
