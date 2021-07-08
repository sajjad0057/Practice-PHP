<?php

abstract class Car {
    abstract function ApplyBreak();

    function hello(){
        echo "Hello from Car Class".PHP_EOL;
    }

}


class SportsCar extends Car {
    function ApplyBreak(){

        echo "Break Applied !".PHP_EOL;

    }
}


$car_1 = new SportsCar();

$car_1->hello();
$car_1->ApplyBreak();

//Cannot create instance an Abstact Class .

// $car_2 = new Car();

// $car_2->hello();

// Output :
// PHP Fatal error:  Uncaught Error: Cannot instantiate abstract class Car
