<?php
class Files{



    public $fileHandler;
    public $fileName;
    public $fileSize;
    public $content;
    public $fileFound;

    function __construct($filename){

        $this->fileHandler = null;
        $this->fileFound = false;

        if (file_exists($filename)){
            if (is_file($filename)){
             $this->fileFound = true;   
            }
        }

        if ($this->fileFound){
            $this->fileHandler = fopen($filename,"r");
            $this->fileSize = filesize($filename);
        }


    }

    function getContent(){

        if ($this->fileFound){
            $content = fread($this->fileHandler,$this->fileSize);
            echo $content.PHP_EOL;
            return;
        }else{
            echo "No File Found !".PHP_EOL;
            return;
        }

    }

    function __destruct(){

        if ($this->fileFound){
            fclose($this->fileHandler);
            echo "File is close from Destructor ";
        }
    }
    
}



$file1 = new Files("text.txt");
$file1->getContent();