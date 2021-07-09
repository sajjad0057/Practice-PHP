<?php
class Post{

    public $post;

    function __construct($post){
        $this->post = $post;
    }
}


$p_1 = new Post("sample Post 1");

// $serialised = serialize($p_1);  // snapshot of an object
// echo $serialised.PHP_EOL;  

// file_put_contents("sample.txt",$serialised);

$unserialized = file_get_contents("sample.txt");
$p_2 = unserialize($unserialized);

echo $p_2->post.PHP_EOL;

