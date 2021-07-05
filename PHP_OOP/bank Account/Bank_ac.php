<?php 

class Bank{
    public $ac_no;
    public $name;
    public $balance = 0;

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
    }

    function deductAmount($amt){
        if ($this->balance >= $amt){
            $this->balance = $this->balance - $amt;
            return;
        }
        else{
           echo "Don't have sufficient amount in your A/C".PHP_EOL;
           return;
        }
    }

    function checkBalance(){
        echo "$this->name has : $this->balance $".PHP_EOL;
        return;
    }
}

$user1 = new Bank();
$user1->ac_no="101";
$user1->name="Sajjad Hossain";
echo "Account no : $user1->ac_no Name : $user1->name has initial bank balance : $user1->balance".PHP_EOL;
echo "----------------------------------------".PHP_EOL;
$user1->depositAmount(1000);
$user1->checkBalance();
$user1->deductAmount(500);
echo "After deduct some amount".PHP_EOL;
$user1->checkBalance();


$user2 = new Bank();
$user2->ac_no="102";
$user2->name="Nafiul Fatta";
echo "Account no : $user2->ac_no Name : $user2->name has initial bank balance : $user2->balance".PHP_EOL;
echo "----------------------------------------".PHP_EOL;
$user2->depositAmount(1000);
$user2->checkBalance();
$user2->deductAmount(1500);
echo "After deduct some amount".PHP_EOL;
$user2->checkBalance();