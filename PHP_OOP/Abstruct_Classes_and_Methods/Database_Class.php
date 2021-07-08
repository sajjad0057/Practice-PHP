<?php 

abstract class Database {
    public $connection;
    public $connectionActive = false ;

    abstract function setConnection($databaseName);
    abstract function getConnection();

}


class DBconnection extends Database {

    function setConnection($databaseName){
        $this->connectionActive = true ;
        $this->connection ="Connected to database".PHP_EOL;
    }

    function getConnection(){
        if($this->connectionActive){
            return $this->connection;
        }
    }
}


$db = new DBconnection();
$db->setConnection("XYZ");
echo "Connection Status : $db->connectionActive".PHP_EOL;
echo $db->getConnection();

