<?php

class File{

    function displayFile($filename):bool{
        $result = true;
        try{
            echo "Read The Content of the file : $filename" . PHP_EOL;
            $content = file_get_contents($filename);
            echo "Content of the $filename is : ".PHP_EOL;
            echo "$content";

        }catch(Exception $e){
            $result = false;
        }
        return $result;
    }
}


$file_1 = new File();
$file_1->displayFile("text.txt");

$file_2 = new File();
$file_2->displayFile("sample.txt");