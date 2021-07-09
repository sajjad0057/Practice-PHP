<?php

/*
this file must be run it your browser , otherwise if you run your console you can see exception :
    DB not connected could not find driver




*/



require_once("Database.php");

$db = new Databse();

echo $db->isConnected() ? "DB connected " : "DB not connected ";

if(!$db->isConnected()){
    echo $db->getError();
    die("Unable to connect to DB");
}

$db->query("SELECT * FROM tbl_oop-test");

var_dump($db->resultSet()); // issu arise resultSet function not call , But why ??? I will try to fixed it later .  