<?php
session_start();
$con = mysqli_connect('localhost','id14703356_root','Madeshwaran777@');
mysqli_select_db($con,'id14703356_mydb');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from adminreg where name = '$name' && password = '$pass' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
	header('location:test.php');
}
else{
	
	header('location:login1.php');
}
?>