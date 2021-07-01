<?php

$url = 'https://jsonplaceholder.typicode.com/users';

# Example to get data :
// $resourse = curl_init($url);
// curl_setopt($resourse,CURLOPT_RETURNTRANSFER,true);
// $result = curl_exec($resourse);

// echo PHP_EOL . $result . PHP_EOL;


// client url  === curl . 

#POST Request :


$resource = curl_init();

$user = [
    "name"=>"Leanne Graham",
    "username"=> "Bret",
    "email"=>"Sincere@april.biz",
];

curl_setopt_array($resource,
    [ 
          
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST =>true,
    CURLOPT_HEADER => ['content-type:application/json'],
    CURLOPT_POSTFIELDS =>json_encode($user),

    ]

    );

$result = curl_exec($resource);
curl_close($resource);
echo PHP_EOL . $result . PHP_EOL;
