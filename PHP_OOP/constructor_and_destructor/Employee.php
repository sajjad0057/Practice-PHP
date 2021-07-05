<?php

// Practice with constructor : Make Employee Salary . 

class Employee{

    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 20;
    public $totalLeaveTaken;
    public $workingDays;


    function __construct($id,$name,$totalLeaveTaken){

        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;

    }


    function getSalaryAmount($totalDays):int{
        // $this is a speacial variable which can be used to access class properties . 
        $this ->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays*$this->workingHoursPerDay*$this->hourlyRate;

        return $salary;
    }
}


$emp1 = new Employee(101,"sajjad Hossain",6);
$salary = $emp1->getSalaryAmount(30);
echo "$emp1->name has work total $emp1->workingDays days. And take total leaves taken $emp1->totalLeaveTaken days".PHP_EOL;
echo "-----------------------------------------------------".PHP_EOL;
echo "$emp1->name Total Salary : $salary $".PHP_EOL;
echo "-----------------------------------------------------".PHP_EOL;

$emp2 = new Employee(102,"ariful islam",12);
$salary = $emp2->getSalaryAmount(30);
echo "$emp2->name has work total $emp2->workingDays days. And take total leaves taken $emp2->totalLeaveTaken days".PHP_EOL;
echo "-----------------------------------------------------".PHP_EOL;
echo "$emp2->name Total Salary : $salary $".PHP_EOL;
echo "-----------------------------------------------------".PHP_EOL;