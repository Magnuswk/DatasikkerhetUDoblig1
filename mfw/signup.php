	
			<?php 
			include('dbconn.php');
				$username = $_POST['username'];
				$password = $_POST['password'];
				$firstname = $_POST ['firstname'];
				$lastname = $_POST ['lastname'];
				
				$sql = ("INSERT INTO commentdb.user (username, password, firstname, lastname) VALUES ('$username', '$password', '$firstname', '$lastname')");

                if(mysqli_query($db_connect, $sql)){
                    echo "<p> Success! </p>";
                    } else {
                    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
                }

                    //Close connection
                    mysqli_close($link);

			?>
			<script>
	alert('Successfully Signed Up! You can now Log in your Account');
	window.location = 'index.php';
</script>