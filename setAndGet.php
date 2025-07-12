<?php
class myClass{
    public $name;
    private $pin;
    public function shoInfo(){
        echo "pincode is : ".$this->pin.'Name is : '.$this->name;
    }
    public function setPin($myPin){
        $this->pin = $myPin;
    }
}
$emp1 =new MyClass();
$emp1->name = "araman";
$emp1->setPin(1001);
$emp1->shoInfo();