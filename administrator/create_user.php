<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: index.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
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
		<h2>Admin - create user</h2>
		<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="../index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fullname" value="<?php echo $fullname; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		</div>
    	<div class="input-group">
			<label>Studieretning</label>
			<input type="text" name="studieretning" value="<?php echo $studieretning; ?>">
		</div>
    	<div class="input-group">
			<label>Kull</label>
			<input type="number" name="kull" value="<?php echo $kull; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
	<br/>
	<br/>
	<div id="container">
		
		<br>
		<br>
		<br>
		<br>
		<center>
		Welcome:
		<?php 
		 echo $member_row['firstname']." ".$member_row['lastname'];
		?>
		(admin)
		</center>
		<br>
		<br>
		<center>
		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>User Type</th>
					<th>Studieretning</th>
					<th>Kull</th>
					<th>Fulltnavn</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$query = mysqli_query("SELECT * FROM multi_login.users") or die (mysql_error());
			while ($row=mysql_fetch_array($query)){
			$id=$row['username'];
			?>
			
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['user_type']; ?></td>
					<td><?php echo $row['studieretning']; ?></td>
					<td><?php echo $row['kull']; ?></td>
					<td><?php echo $row['fullname']; ?></td>
					<td><a href="edit_user.php?id=<?php echo $id; ?>">Edit</a> &nbsp;
					<script type="text/javascript">
						function confirmDelete(delUrl){
						if (confirm("Are you sure you want to delete")) {
							document.location = delUrl;
							}
							
						}
					</script>
					<a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete?')"><font color="red">Delete</font></a></td>
				</tr>
							<?php }
			?>
			</tbody>
		</table>
	<div>
	<h3>EDIT COMMENT</h3>
    <form method="post" target="_blank" action="4b-admin-ajax-comments.php">
      Request - <input type="text" name="req" value="edit" readonly/>
      <br>
      Comment ID - <input type="number" name="comment_id" required/>
      <br>
      Name - <input type="text" name="name" required/>
      <br>
      Message - <input type="text" name="message" required/>
      <br>
      <input type="submit" value="Go"/>
    </form>
 
    <h3>DELETE COMMENT</h3>
    <form method="post" target="_blank" action="4b-admin-ajax-comments.php">
      Request - <input type="text" name="req" value="del" readonly/>
      <br>
      Comment ID - <input type="number" name="comment_id" required/>
      <br>
      <input type="submit" value="Go"/>
    </form>
	</div>

</body>
</html>

