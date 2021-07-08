<?php

/**
 * # protected access modifier :
* -> protected access modifier means it can be accessed inside the Parent class  and immediate child classes only . ***
* -> protected properties cannot be accessed from outside using objects . ***
 */


class University{
    protected $uni_name = " Pabna University of Science and Technology ";

    function printUni(){

        echo "University Name : $this->uni_name".PHP_EOL;

    }


}


class Student extends University{

    public $student_name = "sajjad hossain";
    function helloStudent(){

        echo "Hello from $this->student_name".PHP_EOL;
    }
}


$s_1 = new Student();
$s_1->helloStudent();
$s_1->printUni();