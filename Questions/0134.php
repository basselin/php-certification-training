<?php

/*

// Given the following XML document in a SimpleXML object:

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


// Select the proper statement below which will display the HREF attribute of the anchor tag.

1) $sxe->body->p[0]->a[1]['href']
2) $sxe->body->p->a->href
3) $sxe->body->p->a['href']						// http://php.net/manual/en/simplexml.examples-basic.php
4) $sxe['body']['p'][0]['a']['href']
5) $sxe->body->p[1]->a['href']
 
*/

