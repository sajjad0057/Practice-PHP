<?php

spl_autoload_register(function($classname){
    echo "Loading the class : $classname".PHP_EOL;
    require_once("$classname.php");
});


require_once("Files.php");
require_once("Database.php");


$f_1 = new Files();
$f_1 ->hello();


$db = new Database();
$db ->hello();

