<?php

// How can the following code be re-written from PHP 4 to PHP 5?

if(get_class($myObj) == "MyClass") {
    // Do something
}

/*

1) if(get_class($myObj) === "MyObject)
2) if(strtolower(get_class($myObj)) == "MyClass")
3) if($myObj implements MyClass)
4) if($myObj instanceof Object)
5) if($myObj instanceof MyClass)							http://php.net/manual/en/language.operators.type.php

*/

