<?php
require('connectdb.php');
require('function.inc.php');

$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);

$res=mysqli_query($con,"select * from users where email='$email' and password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['USER_LOGIN']='yes';
	$_SESSION['USER_ID']=$row['id'];
	$_SESSION['USER_NAME']=$row['name'];

	echo "valid";
}else{
	echo "wrong";
}
?>