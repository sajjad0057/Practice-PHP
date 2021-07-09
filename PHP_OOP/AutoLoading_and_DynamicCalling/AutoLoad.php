<?php

spl_autoload_register(function($classname){
    echo "Loading the class : $classname.php".PHP_EOL;
    
    require_once("$classname.php");
    
    

});


// require_once("Library\Files.php");
// require_once("Library\Database.php");



$sh = new StringHelper();
$sh ->hello();

$f_1 = new Files();
$f_1 ->hello();


$db = new Database();
$db ->hello();



