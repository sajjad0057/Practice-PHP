<?php

class University{
    public $uni_name;
    public $uni_address;
    public $post_code;


    function __construct($uni_name,$uni_address,$post_code){

        $this->uni_name = $uni_name;
        $this->uni_address = $uni_address;
        $this->post_code = $post_code;

    }


    function getUniDetails(){
        echo "The University Name : $this->uni_name".PHP_EOL;
        echo "Address : $this->uni_address".PHP_EOL;
        echo "Post Code : $this->post_code".PHP_EOL;
    }
}