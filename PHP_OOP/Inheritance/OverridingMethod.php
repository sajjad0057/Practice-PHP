<?php
class University {

    function hello(){
        echo "Hello from University Class ".PHP_EOL;
    }


}

class Teacher extends University {

    // Overriding of Methods : 

    function hello(){
        echo "Method Overrid by Teacher Class ".PHP_EOL;
        parent::hello(); //     :: by this access class property using class directly . 
    }


}


$t1 = new Teacher();
$t1->hello();