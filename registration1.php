<?php
session_start();
$con = mysqli_connect('localhost','id14703356_root','Madeshwaran777@');
mysqli_select_db($con,'id14703356_mydb');
$name = $_POST['user'];
$pass = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$country = $_POST['country'];
$state= $_POST['state'];
$dob = $_POST['date'];
$s = "select * from adminreg where name = '$name' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
	header('location:login2.php');
}
else{
	$reg = "insert into adminreg(name,password,country,state,phonenumber,dob) values ('$name','$pass','$country','$state','$phonenumber','$dob')";
	mysqli_query($con,$reg);
	echo "Registration sucessul";
}
?>