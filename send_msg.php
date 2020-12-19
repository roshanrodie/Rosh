<?php
require('connectdb.php');
require('function.inc.php');
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$comment=mysqli_real_escape_string($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into contact_us(name,email,mobile,comment,added_on) values('$name','$email','$mobile','$comment','$added_on')");
echo "Thank you";
?>