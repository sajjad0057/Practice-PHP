<?php
class Post{

    public $post;

    function __construct($post){
        $this->post = $post;
    }
}


$p_1 = new Post("sample Post");
$p_2 = $p_1;  // Copy by Reference . 


$p_1->post = "Modified Post";
echo $p_2->post.PHP_EOL;


$p_1 = new Post("sample Post another");
$p_2 = clone $p_1; // cloning 
$p_2->post = "Modified Post by p_2";
echo $p_1->post.PHP_EOL;
echo $p_2->post.PHP_EOL;