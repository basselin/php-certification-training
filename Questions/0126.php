<?php

// Consider the following code segment:

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
      Moved to &lt;<a href="http://example.org/">http://www.example.org/</a>.&gt;
      <br/>
    </p>
  </body>
</html>
XML;

$xml = xml_parser_create("UTF-8");

/* ??????? */

xml_parse($xml, $xmldata);

function xml_start_handler($xml, $tag, $attributes) {
	print "Tag: $tag<br/>\n";
}

function xml_end_handler($xml, $tag) {

}



// What should be placed in place of ?????? above to have the above script display the name of each tag within the XML document?

/*

1) xml_set_callback("xml_start_handler");
2) xml_set_element_handler($xml, "xml_start_handler", "xml_end_handler");					http://php.net/manual/en/function.xml-set-element-handler.php
3) xml_node_set_handler("xml_start_handler", "xml_end_handler");
4) xml_node_set_handler("xml_start_handler");

*/

