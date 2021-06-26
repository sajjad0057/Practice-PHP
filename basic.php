<?php
echo "<h1>Learn PHP</h1>";

// Variable Types :
/**
 * String
 * Int
 * Float
 * Null
 * Array
 * Object
 * Resource
 * 
 */

 // Declare Variable :
 $name = "sajjad";
 $age = 24;
 $gender = "male";
 $job_type = null;

 # Print Variable:

//  echo $name . "</br>";   
//  echo $age . "</br>"; 
//  echo $gender . "</br>";
//  echo $job_type . "</br>";

 # using . {dot}  to concatanate two string .
 # using double cotetion (not single cotation ) to concate string with varibale directly :
 #example :

 echo "My name is  : $name </br>";
//  printf("My name is : %s \n",$name);  # printf() func use to print result in console .
//  printf("Age : %d \n",$age )

# check type of variables :
echo gettype($age) . "</br>";

# print All variable :
var_dump($name,$age,$gender,$job_type);
echo "</br>";

# Some Variable handling Functions


echo isset($xys);

# define constant :
// To create a constant, use the define() function.
// Syntax
// define(name, value, case-insensitive)

define("x",10);
echo x . "<br>";



# Arithmatics Operations :


$x = 10;
$y = 30;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo ($x / $y) . "<br>";
echo round($x / $y) . "<br>";

# Number Checking some function :
# In PHP print 1 if true , and does not print anything, if false 
echo is_float(1.2344) . "<br>"; 
echo is_int(3.4) . "<br>";
echo is_numeric(12334) . "<br>";
echo is_numeric("fsjd") . "<br>";
echo ucwords("converted uppercase first letter in the word") . "<br>";
echo strtoupper("converted uppercase whole word") . "<br>";
echo strtolower("CONVERTED LOWERERCASE WHOLE WORD") . "<br>";


$aobut_me = "
My name is sajjad.
<h1>I am a student of pabna university of science and technology in ICE.</h1>
I want to be a proficient software architect .
";

echo $aobut_me . "<br>";
echo nl2br($aobut_me) ."<br>";  // this func use to line breaks
echo nl2br(htmlentities($aobut_me)) . "<br>";
echo html_entity_decode($aobut_me) . "<br>";



# search  and  SeePHP __ 1000++ built in funtions .


# Number formattings :
$number =  104823.46567;
echo number_format($number,3); // print 3 times of number after decimal point .



?>