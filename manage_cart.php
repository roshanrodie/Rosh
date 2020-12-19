<?php
require('connectdb.php');
require('function.inc.php');
require('add_to_cart.php');

$pid=mysqli_real_escape_string($con,$_POST['pid']);
$qty=mysqli_real_escape_string($con,$_POST['qty']);
$type=mysqli_real_escape_string($con,$_POST['type']);

$obj=new add_to_cart();

if($type=='add'){
	$obj->addProduct($pid,$qty);
}

if($type=='remove'){
	$obj->removeProduct($pid);
}

if($type=='update'){
	$obj->updateProduct($pid,$qty);
}

echo $obj->totalProduct();
?>