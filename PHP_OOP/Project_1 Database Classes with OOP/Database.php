<?php

require_once("Config/config.php");


class Databse{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PWD;
    private $dbname = DB_NAME;
    private $port = DB_PORT;



    private $connection;
    private $error;
    private $statement;
    private $dbconnected = false;


    public function __construct(){

        //Let set the PDO conncection
        
        $dns = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;";
        //echo $dns.PHP_EOL;
        $options = array(
            PDO :: ATTR_PERSISTENT => true,
            PDO :: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
        );

        try{

            $this->connection = new PDO ($dns,$this->user,$this->pass,$options);
            //echo "jdfsfkg".PHP_EOL;

            $this->dbconnected = true;

        }catch(PDOException $e){
            $this->error = $e->getMessage().PHP_EOL;


        }



    }

    function getError(){

        return $this->error;
    }

    function isConnected(){

        return $this->dbconnected;
    }

    // prepare statement with Query : 

    function query($query){
        echo " called query ";
        $this->statement = $this->connection  -> prepare($query);
        echo "test" . $this->statement;
    }

    // this is execute the prepare statement 
    function execute(){

        return $this->statement->execute();
    }

    // Get result set as Array of object 
    function resultSet(){
        // echo " Result Set is Called !".PHP_EOL;
        echo "fjsdk->".$this->statement;
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
        

    }

    // Get Record Row Count 

    function rowCount(){
        return $this->statement->rowCount();

    }


    //Get Single Record as Object 
    function single(){
        $this->execute();
        return $this->statement->fetch(PWD::FETCH_OBJ);

    }


    function bind($param,$value,$type=null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;  //PDO means PHP Database Object ,it is built in class in PHP. 
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;


            }
        }
        $this->statement->bindValue($param,$value,$type);

    }

}