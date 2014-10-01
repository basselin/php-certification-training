<?php

interface MyInterface1
{
    public function doSomething();
    public function specialFunction1();
}

interface MyInterface2
{
    public function doSomething(); // Prior to PHP 5.3.9 => FATAL ERROR
    public function specialFunction2();
}

class MyClass implements MyInterface1, MyInterface2
{
    function doSomething()
    {
        echo '...';
    }
    function specialFunction1()
    {
        echo '...';
    }
    function specialFunction2()
    {
        echo '...';
    }
}

$a = new MyClass();
$a->doSomething();

