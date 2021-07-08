<?php

require_once "CarInterface.php";
require_once "CarModelInterface.php";

class SportsCar implements Car {

    public $model ;

    public function setModel($model){
        $this->model = $model;
    }
    public function getModel():string{

        return "Car Model : $this->model".PHP_EOL;
    }

    public function applyBreak(){
        echo "Appling  Breaks".PHP_EOL;

    }
    public function increaseSpeed(){
        echo "Increase  Speed".PHP_EOL;

    }
    public function decreaseSpeed(){
        echo "Decrease  Speed".PHP_EOL;

    }


}


$car_1 = new SportsCar();

$car_1->setModel("BMW");
echo $car_1->getModel();

$car_1->applyBreak();
$car_1->increaseSpeed();
$car_1->decreaseSpeed();