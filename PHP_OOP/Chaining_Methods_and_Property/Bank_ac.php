<?php 

class Bank{
    public $ac_no;
    public $name;
    public $balance = 0;

    function __construct($ac_no,$name){

        $this->ac_no = $ac_no;
        $this->name = $name;

    }

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
        return $this;
    }

    function deductAmount($amt){
        if ($this->balance >= $amt){
            $this->balance = $this->balance - $amt;
            return $this;
        }
        else{
           echo "Don't have sufficient amount in your A/C".PHP_EOL;
           return $this;
        }
    }

    function checkBalance(){
        echo "----------------------------------" . PHP_EOL;
        echo "$this->name has : $this->balance $".PHP_EOL;
        return;
    }
}

$user1 = new Bank(101,"Sajjad Hossain");
echo "Account no : $user1->ac_no Name : $user1->name has initial bank balance : $user1->balance".PHP_EOL;
echo "----------------------------------------".PHP_EOL;
$user1->depositAmount(1000)->checkBalance();// This is chain and must be called in sequence . 
echo "After deduct some amount".PHP_EOL;
$user1->deductAmount(500)->checkBalance();// This is chain and must be called in sequence . 


$user2 = new Bank(102,"Nafiul Fatta");
echo "Account no : $user2->ac_no Name : $user2->name has initial bank balance : $user2->balance".PHP_EOL;
echo "----------------------------------------".PHP_EOL;
$user2->depositAmount(1000)->checkBalance(); // This is chain and must be called in sequence . 
echo "After deduct some amount".PHP_EOL;
$user2->deductAmount(1500)->checkBalance(); // This is chain and must be called in sequence . 