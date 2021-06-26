<?php

/**
 PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.

Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
 */

$age = 20;
$salary = 30000;

if($age == 20){
    echo "age is equal to 20 <br>";
};

# or

if($age === 20) echo "Another statement ! <br>";

# ternary if :

echo $age >=10 ? "young" : "baby";

# short ternarry :

$myage = $age ?: 24; // if $age value doesnot exists , set value 24.
echo "<br>".$myage . "<br>";

# Null coalesing operator :
// The null coalescing operator (??) is used to replace the ternary operation
// in conjunction with isset() function and returns its first operand if it
// exists and is NOT NULL; otherwise it returns its second operand.

$myName = isset($name) ? $name : "sajjad";
echo $myName . "<br>";

// if $_POST['name'] doesn't exist $result will equal to John
$result = $_POST['name'] ?? 'John';

echo $result . "<br>";

# Switch Statements :

/**
  switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
 */



?>