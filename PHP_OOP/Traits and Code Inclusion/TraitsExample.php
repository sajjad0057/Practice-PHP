<?php

trait DatabaseHelper {

    function getRecords(){
        echo "Here are the your records";

    }
}


class student {

    use DatabaseHelper;  

    function connectDB(){
        $this->getRecords();
    }
}


$s_1 = new Student();
$s_1->connectDB();