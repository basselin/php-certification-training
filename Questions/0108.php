<?php

// Assuming every method call below returns an instance of an object, how can the following be re-written in PHP 5?

$a = new MyClass();
$b = $a->getInstance();
$c = $b->doSomething();

/*

1) $c = ((MyClass)$a->getInstance())->doSomething();
2) This cannot be re-written in PHP 5
3) $c = $a->getInstance()->doSomething();					// PHP 5+
4) $c = (MyClass)$a->getInstance();
5) $c = (new MyClass())->getInstance()->doSomething();		// PHP 5.4+  http://php.net/manual/en/migration54.new-features.php

*/

