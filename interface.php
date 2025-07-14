<?php
    
    interface my_print{
        public function printData();
    }
    interface select{
        public function getData();
    }
    interface myInterface extends my_print,select{
        public function addData();
    }
    class myClass implements myInterface{
        public function printData()
        {
            echo 'print';
        }
        public function getData(){
            echo "read data";
        }
        public function addData()
        {
            echo "add";
        }

    }
    class MyClass2 extends myClass{
        
    }
    $obj = new MyClass2();
    $obj->printData();
    echo '<br>';
    $obj->addData();


?>