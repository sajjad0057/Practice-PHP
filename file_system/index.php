<?php

echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";
// mkdir('test'); // make directory . 

// rename('test','test2'); //rename directory

// rmdir("test2"); // remove dir

 echo file_get_contents('test.txt');  // read file 

// Read Files and Folder inside directory
$files = scandir('./');
var_dump($files);


//write file :

file_put_contents('sample.txt' , 'some text');

// read json file from URL :
// $userJson = file_get_contents('https://jsonplaceholder.typicode.com/posts');
// $user = json_decode($userJson,true); // convert associative array .
// var_dump($user) 

  


?>