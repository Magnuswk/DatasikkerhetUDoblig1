<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
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
					<th>User ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$query = mysqli_query("SELECT * FROM commentdb.user") or die (mysql_error());
			while ($row=mysql_fetch_array($query)){
			$id=$row['user_id'];
			?>
			
				<tr>
					<td><?php echo $row['user_id'];?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
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
		</center>
		
		<br><br>
		<br><br>
		<br><br>
	
		
		
		<hr>
			<br>
			<br>
                <div>
				<center>
					<form method="post" action="post.php"> 
					<textarea name="content" rows="7" cols="64" style="text-align:center;" placeholder=".........Write Someting........" required></textarea>
					<br>
					<button name="post">&nbsp;POST</button>
					<br>
					<hr>
					</form>
					
					<?php
					
					$query = mysql_query("SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post  order by post_id DESC")or die(mysql_error());
					while($row=mysql_fetch_array($query)){
					$post_id = $row['post_id'];	
					?>
					<!--<div class="post">-->
					<p><?php echo $row['content']; ?></p>
					<?php
					
			$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
			if($days > 0)
			echo date('F d, Y - H:i:sa', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "Just now";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
					
					?>
					<?php 
					$member_query = mysql_query("select * from user where user_id = '$user_id'")or die(mysql_error());
					$member_row = mysql_fetch_array($member_query);
					?>
					<br>
				
					Posted by:<span class="myname"><?php echo $member_row['firstname']."  ".$member_row['lastname']; ?></span>
					&nbsp;&nbsp;
					</br><hr>
						<a href="deletepost.php<?php echo '?id='.$post_id; ?>">&nbsp;remove</a>
					</br>
					&nbsp;
					<?php 
					if ($id == $post_id){
					?>
					
				
					
					<?php }else{
					
					}?>
					<!--</div>-->
					<?php } ?>
					
					
				</center>
					
					
	</div><!--container-->


</body>
</html>

