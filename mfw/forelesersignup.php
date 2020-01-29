<?php 
			include('dbconn.php');
                $username = $_POST['username'];
                $firstName = $_POST['firstName'];
                $surName = $_POST['surName'];
                $email = $_POST['email'];
                $emne = $_POST['emne'];
				$password = $_POST['password'];
			
				$sql = ("INSERT INTO commentdb.foreleser_user (username, firstName, surName, email, emne, password) 
                VALUES ('$username', '$firstName', '$surName', '$email','$emne', '$password')");

                if(mysqli_query($db_connect, $sql)){
                    echo "<p> Success! </p>";
                    } else {
                    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
                }

                    //Close connection
                    mysqli_close($link);

			?>
			<script>
	alert('Successfully Signed Up! You can now Log in to your PEPEGA Account');
	window.location = 'index.php';
</script>