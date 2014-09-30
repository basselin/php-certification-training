<?php

// What does the following PHP script accomplish?

$dom = new DomDocument();
$dom->load('test.xml');
$body = $dom->documentElement->getElementsByTagName('body')->item(0);
echo $body->getAttributeNode('background')->value. "\n";

/*

1) Displays the content of every <body> node
2) Displays the "background" attribute for the first node in the XML document named "body"					OK
3) Displays the content of every node that has a "background" node
4) Displays the "background" attribute of every node named "body"

*/

