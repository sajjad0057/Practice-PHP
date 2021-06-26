<?php
# Create Array 
$name  = ["sajjad","nafiul","arif","mahdi","arman"];
print_r($name);
var_dump($name);

# Access array via index . 

echo "<br>". $name[3] . "<br>";

#  # check if array has element in index . 
echo isset($name[1]); # true

# append Element :
$name[] = "mahedi";
var_dump($name) . "<br>"; 

# find length of array :

echo "<br> Length of count array : ". count($name) . "<br";

# split the string into an array :
// $string = "Banana,Apple,mango";
// $arry_string = explode(",",$string);

// var_dump($arry_string);
// # convert string into array :
// echo "<br> Convert array into string : ".implode(",",$arry_string)."<br>";
// #array search :
// echo "<pre>";
// var_dump(array_search("Banana",$string));
// echo "</pre>";

$array_x = ["x","y"];
$array_x["z"] ??= "z";
echo "<pre>";
var_dump($array_x);
echo "</pre>";

# Two dimensional Array :
$todo = [
    ["title" => "todo title 1", "completed " => true],
    ["title" => "todo title 2", "completed " => false],
];

echo "<pre>";
var_dump($todo);
echo "</pre>";







?>