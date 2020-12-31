<?php
session_start();
$con = mysqli_connect('localhost','id14703356_root','Madeshwaran777@');
mysqli_select_db($con,'id14703356_mydb');
$name = $_POST['user'];
$reg = "insert into userdata(data) values ('$name')";
mysqli_query($con,$reg);
header('location:home2.php')

?>