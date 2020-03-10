<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="topnav">
  		<a class="active" href="/index.php">Home</a>
  		<a href="/3a-emne.php">Subjects</a>
  		<a href="">PLACEHOLDER</a>
  			<div class="topnav-right">
    			<a href="/login.php">Log in</a>
    			<a href="index.php?logout='1'" style="color: red;">Log out</a>
  			</div>
		</div>

	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="assets/images/user_profile_default.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
					<main>
						<div class="imgwrapper_center"> <img class="main_imgcenter" src="assets/images/hackerman.jpg" > </div>

					</main>

						<footer> All rights reserved Grp 11 - 2020 </footer>
</body>
</html>