<?php

//while loop 
$i = 1;
while($i<=10){
    echo "sajjad <br>";
    $i++;
};
#do while loop
// do {
//     code to be executed;
//   } while (condition is true);

#for loop 
// for (init counter; test counter; increment counter) {
//     code to be executed for each iteration;
//   }

for($i=0;$i<=10;$i++){
    echo "value i : $i ". "<br>";
}


# foreach loop :
    // foreach ($array as $value) {
    //     code to be executed;
    //   }

#ex :
$name = ["sajjad","nishu","rafiyat","mahimuna","fihad"];
foreach($name as $n){
    echo "name is : $n <br>";
}



$person = [
    "name" => "sajjad hossain",
    "surname" => "sajjad",
    "age" => 25,
    "hobbies" => ['Cycling','gaming']

];

foreach($person as $key => $value){
    echo $key . " --- " . $value . "<br>";
};

?>

