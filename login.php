

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	            <!-- Google Web Fonts -->
				<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/login.css">

	<title>Login - CloverEmporium</title>
</head>
<body background="assets/images/bg.jpg" style="background-repeat: no-repeat;  background-size: cover;">


	<div class="container loginform">

		<form action="logincheck.php" method="POST" class="login">
			<p class="login-text">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password" required>
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Login</button>
			</div>

			<div class="return">
                <a href="index.php">Return to Home</a>
             </div>
			 <br>
			<p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a>.</p>
		</form>
	</div>

</body>
</html>