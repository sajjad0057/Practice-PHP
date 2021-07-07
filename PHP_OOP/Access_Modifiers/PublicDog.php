<?php

class Dog{
    public $color;  // public properties 
    public $breed; // public properties 

    function __construct($color,$breed){
        $this->color = $color;
        $this->breed = $breed;

    }

    function dogBark(){   
        echo "Woof !! Woof ! wwwooooffff".PHP_EOL;
    }

    function dogSleep(){
        echo "ZZZZZZZZZZZZZzzzzzzzzzzzzzzzzz".PHP_EOL;
    }
}

$dog1 = new Dog("black","German Shepard");

echo "Dog Type : $dog1->breed and color : $dog1->color".PHP_EOL;  // Access the properties Directly 

$dog1->dogBark();
$dog1->dogSleep();