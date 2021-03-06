<?php

class Course {

    public $c_id;
    public $l_id_Obj;
    public $q_id_Obj;

    function __construct($c_id,$l_id,$q_id){
        $this->c_id = $c_id;
        $this->l_id_Obj=new Lesson($l_id); // this is TightCoupling . 
        $this->q_id_Obj=new Quiz($q_id); // this is TightCoupling . 
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



class Quiz extends Course {

    public $q_id;

    function __construct($q_id){
        $this->q_id = $q_id;
    }


    function showQuiz(){
        echo "The Quiz Id : $this->q_id".PHP_EOL;
    }


}


$c1 = new Course(1,1101,1011);
// $l = new Lesson(1101)
$c1->l_id_Obj->showLessons();
$c1->q_id_Obj->showQuiz();