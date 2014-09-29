<?php

// Consider the following script:

$dom = new DOMDOcument();
$dom->load('0138.xml');

foreach($dom->documentElement->childNodes as $child)
{
	if(($child->nodeType == XML_ELEMENT_NODE) &&
		$child->nodeName == "item")
	{
		foreach($child->childNodes as $item)
		{
			if(($item->nodeType == XML_ELEMENT_NODE) &&
				($item->nodeName == "title"))
			{
				print "$item->firstChild->data\n";
				
			}
		}
	}
}

// Assuming the referenced XML document exists and matches the parsing logic, what should be displayed when this script is executed?

/*

1) None of the above															OK
2) The XML of each 'title' node
3) The XML of each 'item' node
4) "Title" for every title node in the document
5) The contents of every 'title' node which exists under an 'item' node

*/

