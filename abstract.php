<?php
abstract class car{
    protected $tankVlolume;
    public function setTankVolume($volume){
        $this->tankVlolume =$volume;
    }
    abstract public function calcNumMilsOnFullTank();
}
class Honda extends car{
    public function calcNumMilsOnFullTank(){
        $mils = $this->tankVlolume*30;
        return $mils;
    }
}
class toyota extends car {
    public function calcNumMilsOnFullTank(){
         $mils = $this->tankVlolume*33;
        return $mils;
    }
    public function getColor(){
        return "blue";
    }
}
$Toyota= new toyota();
$Toyota->setTankVolume(10);
echo $Toyota->calcNumMilsOnFullTank()."<br>";
echo $Toyota->getColor();

echo "<br>";

$honda1 = new Honda();
$honda1->setTankVolume(10);
echo $honda1->calcNumMilsOnFullTank()."<br>";