<?php

// Why is it important from a security perspective to never display PHP error messages directly to the end user, yet always log them?

/*

1) Error messages will contain sensitive session information
2) Error messages can contain cross site scripting attacks
3) Security risks involved in logging are handled by PHP
4) Error messages give the perception of insecurity to the user					OK?
5) Error messages can contain data useful to a potential attacker				OK

*/

