<?php 

class ChainMethods{

    public $name;

    // call this method  first to change the value 
    function method1(){
        echo "Hello from Method1" . PHP_EOL;
        $this->name = "Chain Methods";
        return $this;
    }


    // call this method   to display the property value 
    function method2(){
        echo "Hello from Method2 ($this->name)" . PHP_EOL;
        
    }
}

$cm = new ChainMethods();

// $cm->method1()  return class instance  by $this
#Chaining method :

$cm->method1()->method2(); // This is chain and must be called in sequence . 
