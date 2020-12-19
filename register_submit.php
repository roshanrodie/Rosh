<?php
require('connectdb.php');
require('function.inc.php');

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$password=mysqli_real_escape_string($con,$_POST['password']);

$check_user=mysqli_num_rows(mysqli_query($con,"select * from users where email='$email'"));
if($check_user>0){
	echo "email_present";
}else{
	$added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"insert into users(name,email,mobile,password,added_on) values('$name','$email','$mobile','$password','$added_on')");
	echo "insert";
}
?>