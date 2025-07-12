<?php
 class coustomer{
    public $name;
    public $age;
    private $acountNumber;
    private $balance;
    protected $dept;

    public function setAccountNumber($acountNumber){
        $this->acountNumber = $acountNumber;
    }
    public function showInfo(){
        echo $this->name .' '.$this->age.' '.$this->acountNumber ;
    }
 }
 class cus1 extends coustomer{
    function setDept($dept){
        echo $this->dept = $dept;
    }
 }
 $p1 =new coustomer;
 $p1->name = 'araman';
 $p1->age =45;
 $p1-> showInfo();
 echo '<br>';
 $p2= new cus1;
 $p2->setAccountNumber(1001);
  echo '<br>';
$p2->name = 'araman ahmed';
$p2->age =50;
 $p2-> showInfo();
 $p2->setDept('sevvings');