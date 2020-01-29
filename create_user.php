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
		 echo $member_row['username']." ".$member_row['fullname'];
		?>
		(admin)
		</center>
		<br>
		<br>
		<center>
            <table>
                <tr>
                <th>Id</th>
                <th>Username</th>
                <th>email</th>
                <th>user type</th>
                <th>studieretning</th>
                <th>kull</th>
                <th>full name</th>
                </tr>
                
                <?php
                $conn = mysqli_connect("localhost", "root", "Cyber&sec&g11", "multi_login");
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT id, username, email, user_type, studieretning, kull, fullname FROM users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["user_type"] . "</td><td>" . $row["studieretning"] . "</td><td>" . $row["kull"] . "</td><td>" . $row["fullname"] . "</td><tr>";
                }
                    echo "</table>";
                    
                } else { echo "0 results"; }
                $conn->close();
                ?>
                
              </table>
		</center>
		
		<br><br>
		<br><br>
		<br><br>
	   
		
		
		<hr>
			<br>
			<br>

					
					
	</div><!--container-->


</body>
</html>

