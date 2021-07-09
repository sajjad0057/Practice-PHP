<?php

trait DatabaseHelper {

    function getRecords(){
        echo "Here are the your records".PHP_EOL;

    }
}


trait StringHelper {

    function removeSpaces($str){
        return trim($str); 

    }
}


class student {

    use DatabaseHelper;
    use StringHelper;  

    function connectDB(){
        $this->getRecords();

        echo $this->removeSpaces("    This -  Is - Test - Case   ");
    }
}


$s_1 = new Student();
$s_1->connectDB();