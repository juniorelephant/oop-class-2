<?php
abstract class PaymentGatway{
    protected $amount;
    public function __construct($amount){
        $this->amount = $amount;
    }
    abstract public function processPayment();
    public function paymentSucccess(){
        return "payment of {$this->amount} BDT is successfull";
    }
}
    class BkashPayment extends PaymentGatway{ 
        public function processPayment()
        {
            return "Process Nagad payment of {$this->amount} BDT";
        }
}
class roketPayment extends PaymentGatway{
      public function processPayment()
        {
            return "Process roket payment of {$this->amount} BDT";
        }
}
$Bkash = new BkashPayment(100);
echo $Bkash->processPayment().'<br>';
echo $Bkash->paymentSucccess().'<br>';

$Bkash = new roketPayment(200);
echo $Bkash->processPayment().'<br>';
echo $Bkash->paymentSucccess().'<br>';
?>