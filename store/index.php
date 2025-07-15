<?php
require 'src/model/customer.php';

use store\src\model\customer;

$customer = new customer('kamal');
echo $customer->getName();
?>