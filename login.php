`<html>
<head>	
	<title>	User login And Registrarion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="	https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2 style="color: blue"> Login Here </h2>
				<form action="vaildation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name = "user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name = "password" class="form-control" required>
					</div>
					<button type = "submit" class = "btn btn-primary">Login</button>
					<A HREF = "login3.php" > <p style="color: red"> Admin Click Here </p></A>
				</form>
			</div>
			<div class="col-md-6 login-right">
				<h2 style="color: blue"> Register Here </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name = "user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name = "password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Date Of Birth</label>
						<input type="date" name = "date" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name = "phonenumber" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Country</label>
						<input type="text" name = "country" class="form-control" required>
					</div>
					<div class="form-group">
						<label>State</label>
						<input type="text" name = "state" class="form-control" required>
					</div>
					<button type = "submit" class = "btn btn-primary">Register</button>
				</form>
			</div>
		</div>
		</div>
</body>
</html>