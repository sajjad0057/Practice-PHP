<?php


class car {
    public  $name;
    public  $price;

    function hello(){
        echo "from the car class !" . PHP_EOL;
    }


}


$car_1 = new car;
$car_1->name="XYZ";
$car_1->price = 343;
$car_1->hello();

echo "Car name : $car_1->name and car price $car_1->price ".PHP_EOL;