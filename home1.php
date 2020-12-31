<?php
session_start();

?>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="	https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="login-box">
	<form action="access.php" method="post">
	<div class="form-group">
		<h2 style="color:#0066ff"> Enter Data </h2>
			<input type="text" name = "user" class="form-control" required>
		</div>
		<button type = "submit" class = "btn btn-primary">Submit</button>
		<h2 style="color:  #33cc33"> Data Added Sucessfully </h2>
		<A HREF = "test2.php" > View data here </A>
	</form>
	</div>
</body>
</html>