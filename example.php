<?php
class category {
    public $catName;
    public function __construct($catagoryName){
        $this->catName =$catagoryName;
    }
    public function getCategory(){
        return "catrgory:". $this->catName;
    }
}
class Electronics extends category{
    public $brand;
    public function __construct($catagoryName,$brand){
        parent:: __construct($catagoryName);
        $this->brand=$brand;
    }
    public function getProductDetails(){
        return $this->getCategory()."Brand:".$this->brand;
    }
}
class clothing extends category
{
    public $size;
    public function __construct($categoryName,$size){
        parent::__construct($categoryName);
        $this->size=$size;
    }
    public function getProductDetails(){
        return $this->getCategory()."size".$this->size;
    }
}
$mobile = new Electronics("A","B");
$tshirt = new clothing("C","D");

echo $mobile->getProductDetails().'<br>'; 
echo $tshirt->getProductDetails(); 