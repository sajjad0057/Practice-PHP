<?php

interface Database {

    // Established the connection with the Database 
    function openConnection();


}


class OracleDB implements Database {

    //polymorphic nature 
    function openConnection(){
        echo "Oracle Driver is established the connection ".PHP_EOL;

    }

}


class MySqlDB implements Database {
    //polymorphic nature 
    function openConnection(){
        echo "MySql Driver is established the connection ".PHP_EOL;

    }


}


$d1 = new OracleDB();
$d1->openConnection();

$d2 = new MySqlDB();
$d2 ->openConnection();