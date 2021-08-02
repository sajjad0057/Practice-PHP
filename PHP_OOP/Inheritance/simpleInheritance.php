<?php 

class x {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getData()
    {
        echo "name : ".$this->name.PHP_EOL;
    }


}


class y extends x{
    public $age;
    public function __construct($name,$age)
    {
        parent::__construct($name);
        $this->age =$age;
    }

    public function getData(){
        parent::getData();
        echo "age : ".$this->age.PHP_EOL;
    }

}


$x_obj = new x("sajjad ");
$x_obj->getData();

$y_obj = new y("sajjad",24);
$y_obj->getData();