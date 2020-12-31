<!DOCTYPE html>
<html>
<head>
	<title>Table with Database</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color : white;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
	</style>
</head>
<body>
<table>
	<tr>
		<th>Name</th>
		<th>Password</th>
		<th>Country</th>
		<th>State</th>
		<th>Phone number</th>
		<th>Date of Birth</th>
	</tr>
	<?php
	$conn = mysqli_connect('localhost','id14703356_root','Madeshwaran777@');
	mysqli_select_db($conn,'id14703356_mydb');
	if($conn->connect_error){
		die("Connection Failed:". $conn->connect_error);
	}
	$sql = "SELECT  name, password, country, state, phonenumber, dob from usertable";
	$result = $conn -> query($sql);

	if($result -> num_rows >  0)
	{
		while($row = $result-> fetch_assoc())
	{
		echo "<tr><td>" . $row["name"] . "</td><td>" . $row["password"] . "</td><td>" .$row["country"]."</td><td>".$row["state"] . "</td><td>" .$row["phonenumber"]. "</td><td>" . $row["dob"] . "</td></tr>";
	}
	echo "</table>";
	}
	else{
		echo "0 result";
	}
	$conn -> close();
	?>
</table>
</body>
</html>