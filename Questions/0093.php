<?php

// When using a function such as strip_tags, are markup-based attacks still possible?

/*

1) No, HTML does not pose any security risks
2) Yes, even a <p> HTML tag is a security risk
3) Yes, attributes of allowed tags are ignored								OK
4) No, strip_tags will prevent any markup-based attack

*/

