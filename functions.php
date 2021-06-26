<?php
/**
 * Syntax :
 * 
 function functionName() {
  code to be executed;
}
 */
function hello(){
    echo "Hello world <br>";
};

hello();

function addNumbers(int $a, int $b) {
    return $a + $b ."<br>";
  }
  echo addNumbers(5,10);


  function sum(...$x) {
    $sum = 0;
    foreach($x as $n){
        $sum +=$n;
    };
    return $sum;
  }
  echo sum(1,2,3,4,5,6) ."<br>";

#
/*
 * 
Syntax :
array_reduce(array, myfunction, initial)
Parameter Values :

Parameter	                        Description
array	                            Required. Specifies an array
myfunction                          Required. Specifies the name of the function
initial	                            Optional. Specifies the initial value to send to the function
 
*/

 function xyz(...$nums){
     return array_reduce($nums,fn($carry,$n)=>$carry+$n);  //fn($carry,$n) here $carry = array 1at value and $n=2nd value initialy.
 };


echo xyz(1,2,3,4,5,6) . "<br>";

# date func :
echo date("Y-m-d H:i:s") . "<br>";



?>