<?php

class Course {

    public $c_id;
    public $l_id_Obj;

    function __construct($c_id,$l_id){
        $this->c_id = $c_id;
        $this->l_id_Obj=new Lesson($l_id); // this is TightCoupling . 
    }


}


class Lesson extends Course {

    public $l_id;

    function __construct($l_id){
        $this->l_id = $l_id;
    }


    function showLessons(){
        echo "The Lesson Id : $this->l_id".PHP_EOL;
    }


}


$c1 = new Course(1,1101);
// $l = new Lesson(1101)
$c1->l_id_Obj->showLessons();