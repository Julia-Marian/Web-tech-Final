<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<a href="logout.php">LOGOUT</a>
	<div class="login-box">
		<div class="row">
			<div class="col-md-6" login>
				<h2>Login</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" href= "home.php" class="btn btn-primary"> Login </button>
					<p class="login-register-text">Don't have an account?<a href="register.php">Register Here</a></p>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>





