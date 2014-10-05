<?php

// Which PCRE regular expression will match the string PhP5-rocks?

/*

1) /^[hp1-5]*\-.*/i							OK
2) /[hp1-5]*\-.?/
3) /[hp][1-5]*\-.*/
4) /[PhP]{3}[1-5]{2,3}\-.*$/
5) /[a-z1-5\-]*/

*/

