<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>PIN-CODE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topnav">
  		<a class="active" href="/index.php">Home</a>
  		<!-- <a href="/3a-emne.php">Subjects</a> -->
  		<a href="">PLACEHOLDER</a>
  			<div class="topnav-right">
    			<a href="/login.php">Log in</a>
    			<!-- <a href="index.php?logout='1'">Log out</a> -->
  			</div>
	</div>

</div>

	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
				<br/>
		<p>
			Not a registered student? <a href="register.php">Sign up</a>
			<br/>
			Lecturer? <a href="foreleserregister.php">Sign up</a>
			<br/>
			<br/>
			If you are not a student, please log in as a <a href="guest.php">Guest</a> <!-- Funker ikke enda -->
			

		</p>
	</form>
	<br/>
	<br/>
	<br/>
	<br/>

	<div></div>
</body>
</html>