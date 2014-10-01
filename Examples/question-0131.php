<?php

$dom = new DOMDocument();
//$dom = new DOMDocument('1.0', 'utf-8');
$head = $dom->createElement('head');



$title = $dom->createElement('title');
$node = $dom->createTextNode('Hello, World!'); // Solution

$title->appendChild($node);
$head->appendChild($title);



// More
$attr = $dom->createAttribute('id');
$attr->value = 'my-title';
$title->appendChild($attr);

$title->setAttributeNode(new DOMAttr('data-charset', 'utf-8'));



// Render
$dom->appendChild($head);
var_dump(
    $dom->saveXML(),
    $dom->saveXML($title),
    $dom->saveHtml()
);

