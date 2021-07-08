<?php

class Calculator{

    static public $result;
    static function add ($a,$b){
         self::$result = $a+$b; // self can be use access static properties inside class . 
    }

}

Calculator::add(4,5);
echo "--------------------------".PHP_EOL;
echo Calculator::$result .PHP_EOL;