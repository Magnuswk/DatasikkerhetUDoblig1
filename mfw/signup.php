	
			<?php 
			include('dbconn.php');
				$name = $_POST['username'];
				$email = $_POST['password'];
				$studieretning = $_POST ['firstname'];
				$kull = $_POST [''];
				$passord = $_POST ['lastname'];
				
				$sql = ("INSERT INTO commentdb.user (name, email, studieretning, kull, password) VALUES ('$name', '$email', '$studieretning', '$kull', '$passord');");

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