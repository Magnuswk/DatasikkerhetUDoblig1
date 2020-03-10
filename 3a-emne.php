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
    <title>
      Subject
    </title>
    <script src="assets/js/3b-comments.js"></script>
    <link href="assets/css/3c-comments.css" rel="stylesheet">
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
    <p>FILL WITH INFO</p>
    <p>FILL WITH INFO</p>

    <!-- GIVE YOUR PAGE OR PRODUCT A POST ID -->
    <input type="hidden" id="post_id" value="999"/>

    <!-- CREATE A CONTAINER TO LOAD COMMENTS -->
    <div id="comments"></div>

    <!-- CREATE A CONTAINER TO LOAD REPLY DOCKET -->
    <div id="reply-main"></div>
  </body>
</html>