<?php

class Dog{
    private $color;  // private properties 
    private $breed; // private properties 

    // Setter method
    function setColor($color){

        $this->color = $color;
        
    }

    // Setter method
    function setBreed($breed){

        $this->breed = $breed;
        
    }

    //Getter methods 
    function getColor():string{
        return $this->color;

    }
    //Getter methods 
    function getBreed():string{

        return $this->breed;
        
    }

    function dogBark(){   
        echo "Woof !! Woof ! wwwooooffff".PHP_EOL;
    }


    function dogSleep(){
        echo "ZZZZZZZZZzzzzzzzzzz".PHP_EOL;
    }
}

$dog1 = new Dog();
$dog1->setColor("black");
$dog1->setBreed("German Shepard");
// echo "Dog Type : $dog1->breed and color : $dog1->color".PHP_EOL;  // Cannot Access the private properties Directly via objects 
echo $dog1->getColor().PHP_EOL;
echo $dog1->getBreed().PHP_EOL;

$dog1->dogBark();
$dog1->dogSleep();