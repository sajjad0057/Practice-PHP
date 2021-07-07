<?php
declare(strict_types=1);

require_once "University.php";
require_once "Teacher.php";


$uni_1 = new University("PUST","PABNA",6600);
$uni_2 = new University("PUST-2","PABNA-2",660022);

$t_1 = new Teacher("Sarwar hosain",40,"web programming",$uni_1);
$t_2 = new Teacher("Omar Faruk",52,"java programming",$uni_1);
$t_3 = new Teacher("Omar Faruk 2 ",522,"java programming 2",$uni_2);

$t_1->getTeacherDetails();
$t_1->getUniDetails();
echo "---------------------------------------------".PHP_EOL;
$t_2->getTeacherDetails();
$t_2->getUniDetails();

echo "---------------------------------------------".PHP_EOL;

$t_3->getTeacherDetails();
$t_3->getUniDetails();