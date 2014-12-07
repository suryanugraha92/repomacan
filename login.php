<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<form action="login.submit.php" method="post">
		<div class="form-group">
			<label class="control-label" for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control">
		</div>

		<div class="form-group">
			<label class="control-label" for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" value="Login" class="btn btn-primary">
		</div>
	</form>
</body>