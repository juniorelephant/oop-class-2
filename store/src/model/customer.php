<?php
namespace store\src\model;
class customer {
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
