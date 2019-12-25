<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/signup_style.css">
</head>

<body>
	<div class="bg">
		<div class="login_container">
			<h1>Signup</h1>
			<form action = "connect.php" method = "post">
				Name<br><br>
				<input type="text" name="name">
				<br><br>
				College Name<br><br>
				<input type="text" name="clg_name">
				<br><br>
				Mobile No.<br><br>
				<input type="text" name="mobile">
				<br><br>
				Email<br><br>
				<input type="text" name="email">
				<br><br>
				Password<br><br>
				<input type="password" name="password">
				<br><br>
				Confirm Password<br><br>
				<input type="password" name="confirmpassword">
				<br><br><br>
				<input type="submit" value="Sign Up">
				<br><br>
				<a href="http://localhost/tuts/index.html">Cancel</a>
				<br><br>
			</form>
		</div>
	</div>
</body>