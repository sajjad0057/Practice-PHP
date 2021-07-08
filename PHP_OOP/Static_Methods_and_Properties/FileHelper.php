<?php

class FilesHelper {
    static function hasData($fileName):bool{
        if(file_exists($fileName)){
            return true;
        }else{
            return false;
        }

    }
}


if( FilesHelper :: hasData("text.txt") ){
    echo "File is exist".PHP_EOL;
}else{
    echo "File Does not exist".PHP_EOL;
}