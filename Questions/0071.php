<?php

// Consider the following script:

$string = "<b>I like 'PHP' & I think it is \"cool\"</b>";

var_dump(htmlentities($string, ENT_QUOTES));
var_dump(htmlspecialchars($string));

// In this script, do the two var_dump() calls produce the same string? Why or Why Not?

/*

1) No, the htmlentities() call will translate quotes while the htmlspecialchars() call will not									OK
2) No, htmlentites() translates < and > symbols to their HTML entity equivalents while htmlspecialchars() only does quotes
3) No, the htmlentites() call won't translate quotes to HTML entities while the htmlspecialchars() call will
4) Yes, htmlspecialchars() and htmlentities() with the ENT_QUOTES constants produce the same result

*/

