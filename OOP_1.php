<?php

class Person{
    public $name;
    public $surname;
    public $age;


};

$p1 = new Person();
$p1->name = "sajjad hossain";
$p1->surname = "sajjad";
$p1->age = 25;

$p2 = new Person();
$p2->name = "sajjad hossain";
$p2->surname = "sajjad";
$p2->age = 25;

var_dump( $p1 );
echo "<br>". $p1->name . "<br>";
