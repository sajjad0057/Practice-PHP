<?php

// declare class :

class car {
    public  $name;
    public  $price;

    function hello(){
        echo "from the car class !" . PHP_EOL;
    }


}

// Declare objects :

$car_1 = new car;
$car_1->name="XYZ";
$car_1->price = 343;
$car_1->hello();

$car_2 = new car;
$car_2->name="fasg";
$car_2->price = 4573;

echo "Car name : $car_1->name and car price $car_1->price ".PHP_EOL;
echo "Car name : $car_2->name and car price $car_2->price ".PHP_EOL;