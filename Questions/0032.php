<?php

// What is the output of the following code?

class MyException extends Exception {}
class AnotherException extends MyException {}

class Foo {
    public function something() {
        throw new AnotherException();
    }
    public function somethingElse() {
        throw new MyException();
    }
}

$a = new Foo();

try {
    try {
        $a->something();
    } catch(AnotherException $e) {
        $a->somethingElse();
    } catch(MyException $e) {
        print "Caught Exception";
    }
} catch(Exception $e) {
    print "Didn't catch the Exception!";
}

/*

1) "Caught Exception" followed by "Didn't catch the Exception!"
2) A fatal error for an uncaught exception
3) "Didn't catch the Exception!"											OK
4) "Didn't catch the Exception!" followed by a fatal error
5) "Caught Exception"

*/

