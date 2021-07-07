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
    function t_name(){
        echo "Teacher Name : $this->teacherName".PHP_EOL;
    }
}


$t1=new Teacher();
$t1->uniName();
$t1->t_name(); // using child Object to call the Parent Method . 
