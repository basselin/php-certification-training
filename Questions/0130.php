<?php

// Consider the following simple PHP script:

$dom = new DomDocument();
$dom->load('test.xml');
$xpath = new DomXPath($dom);
$nodes = $xpath->query(???????, $dom->documentElement);
echo $nodes->item(0)->getAttributeNode('bgcolor')->value . "\n";


// What XPath query should go in the ?????? above to display the "bgcolor" attribute of the first "body" node in the XML document?

/*

1) "*[local-name()='body']"							http://xmlfr.org/w3c/TR/xpath/
2) "/body[0]/text"
3) "/body/body[0]"
4) "name='body'"
5) "*[lname()='body']"

*/

