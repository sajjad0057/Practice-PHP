<?php

class Calculator{

    static public $result;
    static function add ($a,$b):int{
         $result = $a+$b;

         return $result;

    }

}
Calculator::$result = Calculator::add(4,5);
echo Calculator::add(4,5) .PHP_EOL;
echo "--------------------------".PHP_EOL;
echo Calculator::$result .PHP_EOL;

