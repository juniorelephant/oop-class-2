<?php
class bankAccount{

    public $accountNumber;
    public $balance;

    public function deposit($accountNumber, $amount){
        echo "For Account Number : $accountNumber"."<br>";
        if($amount>0){
            echo "total amount is:".$this->balance+= $amount;
            echo '<br>';
            return true;
        }else{
            echo "insufficient Balance"."<br>";
        }
    }
    public function withdraw($accountNumber,$amount){
        if($amount<$this->balance){
            echo $this->balance-=$amount;
        }else{
            echo "insufficient Balance"."<br>";
        }
    }
}
$account = new bankAccount();
$account->balance= 100;
$account->deposit(1001,500);
$account->withdraw(1001,500);
