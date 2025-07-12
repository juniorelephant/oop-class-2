<?php
class chairman{
    public function showChairman(){
        echo "i am chairman";
    }
}
class MD extends chairman{
    public function showMD(){
        echo "i am md";
    }
}
class Worker extends MD{
    public function showWorker(){
        echo "i am Worker";
    }
}
$obj = new Worker();
$obj-> showChairman();
$obj2 = new MD();
echo '<br>';
$obj2 ->showMD();