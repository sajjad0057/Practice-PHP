<?php


/**
 *  BASIC PROPOSE OF CONSTRUCTOR MIGHT BE:
 * ===========================================
 *  ->Initialize the properties of class.
 *  ->Initialize the database connection.
 *  ->Check if the file Exists . 
 *  ->Open the file before using it with the methodd . 
 *  ->Check for the internet connection . 
 *  ->Check API is reachable before the connection . 
 *  ->Load Instance of a class . 
 *  ->Load Mendatory properties to execute the methods in the class . 
  
 */

class Student{

    #initialize variable with default value
    public $name;
    public $class;

    # define constructor : 
    function __construct($name = "",$class=""){
        $this->name = $name;
        $this->class = $class;
    }


    function printDetails(){
        echo "Student Name : $this->name".PHP_EOL;
        echo "class Name : $this->class".PHP_EOL;
        return;
    }




}


$std1=new Student("rifat","six");
$std1->printDetails();
$std2=new Student("Anika","eight");
$std2->printDetails();
