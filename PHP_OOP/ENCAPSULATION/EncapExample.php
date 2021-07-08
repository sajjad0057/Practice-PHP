<?php


// Data Encapsulation Concept or design pattern is followed . 

class Post {
    private $post = "";

    function setPost($post){

        $this->post = $post;

    }

    function getPost(): string{

        return $this->post;
        
    }
}



$p_1 = new Post();

$p_1 ->setPost("Sample Post");

echo $p_1->getPost().PHP_EOL;