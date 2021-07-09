<?php

spl_autoload_register(function($classname){
    echo "Loading the class : $classname.php".PHP_EOL;
    
    require_once("$classname.php");
    
    

});


// require_once("Library\Files.php");
// require_once("Library\Database.php");




$f_1 = new Library\Files();
$f_1 ->hello();


$db = new Library\Database();
$db ->hello();



