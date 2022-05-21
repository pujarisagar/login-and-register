<?php
    session_start();
    if(isset($_SESSION['name']))
    {   
    header('location:dashboad.php');
  exit;
}
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="login.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="register1.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			
			<div class="input-group">
				<input type="text" placeholder="Name" name="name"  required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username"  required>
				<p class="err"><?php if(isset($_GET['user_error'])){ echo $_GET['user_error'];}?></p>
			</div>
			<div class="input-group"> 
				<input type="email" placeholder="Email" name="email"  required>
				<p class="err"><?php if(isset($_GET['email_error'])){ echo $_GET['email_error'];}?></p>
			</div>
			<div class="input-group">
				<input type="number" placeholder="Phone no." name="number"  required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Address" name="address"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
				<p class="err"><?php if(isset($_GET['password_error'])){ echo $_GET['password_error'];}?></p>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>