<?php

abstract class Shape{

    protected $color = '';
    abstract function calculateArea();

    function getColor(){

        return $this->color;

    }
}


class Rectangle extends Shape{

    public $lenght;
    public $width;

    function __construct($lenght,$width,$color){
        $this->lenght = $lenght;
        $this->width = $width;
        $this->color= $color;

    }

    function calculateArea(){

        return $this->lenght * $this->width;

    }
}



class Circle extends Shape{

    public $radius;
    static public $PI = 3.1416;


    function __construct($radius,$color){
        $this->radius = $radius;

        $this->color= $color;

    }


    function calculateArea(){

        return $this->radius * self::$PI;
        
    }
}



$rec = new Rectangle(5,3,"red");
echo "Rectangle Area : " . $rec ->calculateArea().PHP_EOL;

$cir = new Circle(5,3,"red");
echo "Circle Area : " . $cir ->calculateArea(3,"green").PHP_EOL;
