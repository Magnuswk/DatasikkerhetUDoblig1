<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="/index.php">Home</a></li>
			<li><a href="/login.php">Login</a></li>
			<!-- <li><a href="/subject.php">Subject</a></li> 	Re-enable after login-->
		</ul>
	</nav>

	<div class="midpicbox">
		<img class="midpic" src="assets/images/cybersecc.png" alt="pixel art for cybersecurity">
		

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
			If you are not a student, please log in as a <a href="">Guest</a> <!-- Funker ikke enda -->
			

		</p>
	</form>

	<div></div>
</body>
</html>