<?php

class Calculator{

    static public $result;
    static public $x =5;
    static function add ($a,$b):int{
         $result = $a+$b;

         return $result;

    }

}
Calculator::$result = Calculator::add(4,5);
echo Calculator::add(4,5) .PHP_EOL;
echo "--------------------------".PHP_EOL;
echo Calculator::$result .PHP_EOL;



//static properties are also access by object . 
$c_1 = new Calculator();
echo $c_1::$x;