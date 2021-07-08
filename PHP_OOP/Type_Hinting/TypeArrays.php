<?php

class University{

    private $name;
    function getName():string{
        return $this->name;
    }

    function setName(string $name): void{
         $this->name = $name;
    }
}


class Student extends University {

    private $stdId = "";
    private $stdName = "";

    function setDetails(array $stduents):void{
        $this->stdId = $stduents['id'];
        $this->stdName = $stduents['name'];
    }
}



$uni = new University();
$uni->setName("PUST");
$s_1 = new Student();
$s_1->setDetails(['id'=>101,'name'=>"sajjad"]);
var_dump($s_1);