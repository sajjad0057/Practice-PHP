<?php

class Person{
    public $name;
    public $surname;
    public $age;

    public static $counter = 0;

    public function __construct($name,$surname){
        echo $name . " " . $surname .PHP_EOL ;
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;    // :: is called scope resulations. used to access static property in class .  
    }

    public function setAge($age){
        $this ->age = $age;
    }
    public function getAge(){
        return $this->age;
    }


    public static function getCounter(){
        return self::$counter;   
    }




};

$p1 = new Person("sajjad hossain","sajjad" );
// $p1->name = "sajjad hossain";
// $p1->surname = "sajjad";
// $p1->age = 25;
var_dump( $p1 );
$p2 = new Person("sanwar hossain","sanwar");
// $p2->name = "sanwar hossain";
// $p2->surname = "sanwar";
// $p2->age = 16;
$p1->setAge(24);
echo $p1->getAge() . PHP_EOL; 
var_dump( $p1 );
echo  $p2->name . PHP_EOL ;
echo Person :: $counter . PHP_EOL;
echo Person :: getCounter() . PHP_EOL;
