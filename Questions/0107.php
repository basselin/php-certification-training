<?php

// When migrating the following code from PHP 4 to PHP 5, what should be changed?

class MyClass {
    function MyClass($param) {
        /* Do something with $param */
        $this->_doSomething($param);
    }

    // Private method to MyClass
    function _doSomething($param) {
        /* Do something with $param */
    }
}

class AnotherClass extends MyClass {
    var $param = "foo";

    function AnotherClass() {
        parent::MyClass($this->param);
    }
}

/*

1) Access modifiers should be added to methods											OK
2) The Constructors for the objects should both be renamed to __construct				OK
3) The use of the parent keyword has changed to 'super'
4) Constructors must have the same parameter lists

*/

