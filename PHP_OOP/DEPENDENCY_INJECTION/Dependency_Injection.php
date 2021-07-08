<?php

class Course {

    public $c_id;

    function __construct($c_id){
        $this->c_id = $c_id;
    }


}


class Lesson extends Course {

    public $l_id;

    function __construct($l_id,Course $c){
        $this->l_id = $l_id;
        $this->c_id = $c->c_id;
    }


    function showLessons(){
        echo "The Lesson Id : $this->l_id".PHP_EOL;
    }


}



class Quiz extends Course {

    public $q_id;

    function __construct($q_id,Course $c){
        $this->q_id = $q_id;
        $this->c_id = $c->c_id;
    }


    function showQuiz(){
        echo "The Quiz Id : $this->q_id".PHP_EOL;
    }


}


$c1 = new Course(1);
$l1 = new Lesson(101,$c1);
$q1 = new Quiz(111,$c1);

$l1->showLessons();
$q1->showQuiz();

