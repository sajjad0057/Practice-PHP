<?php
// see doc known more about __set and __get . 
class Student{

    private $id;
    private $name;

    function __set($name,$id){
        echo "Set Method is not found so this is called ".PHP_EOL;
        echo $name.PHP_EOL;
        echo $id.PHP_EOL;
    }

    function __get($name){

        echo "get Method is not found so this is called ".PHP_EOL;
        echo $name.PHP_EOL;
    }
}


$s1 = new Student();
$s1->id = 101;

