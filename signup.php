

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

	<title>Register - CloverEmporium</title>
</head>
<body background="assets/images/bg.jpg" style="background-repeat: no-repeat;  background-size: cover;">
	<div class="container loginform">
		<form action="signupcheck.php" method="POST" class="login">
            <p class="login-text">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button type="submit" class="btn">Register</button>
			</div>
			<div class="return">
                <a href="index.php">Return to Home</a>
             </div>
             <br>
			<p class="login-register-text">Already have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>