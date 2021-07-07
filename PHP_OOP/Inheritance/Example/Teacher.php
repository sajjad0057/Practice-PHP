<?php

class Teacher extends University {

    public $t_name;
    public $t_age;
    public $subject;

    function __construct($t_name,$t_age,$subject, University $uni){  // here $uni is University class instance . 
 
        $this->t_name = $t_name;
        $this->t_age = $t_age;
        $this->subject = $subject;


        $this->uni_name = $uni-> uni_name;
        $this->uni_address = $uni-> uni_address;
        $this->post_code =  $uni-> post_code;
    }


    function getTeacherDetails(){
        echo "Teacher Name : $this->t_name".PHP_EOL;
        echo "Teacher Age : $this->t_age".PHP_EOL;
        echo "Teacher Subject : $this->subject".PHP_EOL;
    }

}