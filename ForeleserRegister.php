<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Foreleser registrer</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="topnav">
  		<a class="active" href="/index.php">Home</a>
  		<a href="/3a-emne.php">Subjects</a>
  		<a href="">PLACEHOLDER</a>
  			<div class="topnav-right">
    			<a href="/login.php">Log in</a>
    			<a href="index.php?logout='1'">Log out</a>
  			</div>
		</div>


<div class="header">
	<h2>Student register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Full name</label>
		<input type="text" name="name">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>