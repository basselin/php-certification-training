<?php
/**
 * Closure
 * Closure::bind()  Closure::bindTo()
 * @version PHP 5.4+
 */

error_reporting(E_ALL);

class A
{
    private static $sfoo = 1;
    private $ifoo = 2;
}

$cl1 = static function() {
  //$cl1 = function() {
    return A::$sfoo;
  //return static::$sfoo;
};
$cl2 = function() {
    return $this->ifoo;
};

// Test 1
$bCl1 = Closure::bind($cl1, null, 'A');
//$bCl1 = Closure::bind($cl1, new A); // FATAL ERROR ==>> Solution:  public static $sfoo;

// Test 2
$bCl2 = Closure::bind($cl2, new A(), 'A');
//$bCl2 = Closure::bind($cl2, new A); // FATAL ERROR ==>> Solution:  public static $ifoo;
//$objA = new A;
//$bCl2 = Closure::bind($cl2, $objA, get_class($objA));

var_dump(
    $cl1,
    $cl1 instanceof Closure,
    $bCl1(),
    $bCl2()
);



echo '<hr />';



class B
{
    function __construct($val)
    {
        $this->val = $val;
    }
    function getClosure()
    {
        return function() {
            return $this->val;
        };
    }
    function val()
    {
        return $this->val;
    }
}

$obj1 = new B(1);
$obj2 = new B(2);

$cl = $obj1->getClosure();
var_dump($obj1->val(), $cl());

$cl = $cl->bindTo($obj2);
var_dump($obj2->val(), $cl());



echo '<hr />';



$fn = function() {
    return ++$this->val;
};
$fn = $fn->bindTo($obj2);
var_dump($obj2->val(), $fn(), $obj2->val());

