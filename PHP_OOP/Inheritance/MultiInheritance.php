<?php 

//Multiple Inheritance is not supported in PHP . 

class University{
    
    public $universityName = "PUST";

    function uniName(){
        echo "University Name : $this->universityName ".PHP_EOL;

    }

}



class Teacher extends University{
    public $teacherName = "XYZ";
    private $workingHour = 8;
    function t_name(){
        echo "Teacher Name : $this->teacherName".PHP_EOL;
    }

    function calculateSalary($perHour):int{

        return $perHour * $this->workingHour;

    }
}


class PartTimeTeacher extends Teacher{
    public $teacherName = "parttime Teacher x ";
    private $workingHour = 4;
    function t_name(){
        echo "Part Teacher Name : $this->teacherName".PHP_EOL;
        
    }

    function calculateSalary($perHour):int{

        return $perHour * $this->workingHour;

    }
}





$p_t1=new PartTimeTeacher();
$p_t1->uniName();
$p_t1->t_name(); // using child Object to call the Parent Method .
echo "salary : ";
echo  $p_t1->calculateSalary(500) .PHP_EOL;

$t1=new Teacher();
$t1->uniName();
$t1->t_name(); // using child Object to call the Parent Method .
echo "salary : ";
echo  $t1->calculateSalary(1000) .PHP_EOL;