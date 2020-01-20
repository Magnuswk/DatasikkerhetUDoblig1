<?php
    $conn = mysql_connect("localhost", "root", "", "cybersecg11");

    if(isset ($_POST["submit"]))
    {
      $sql1 = sprintf("INSERT INTO studregister(name, email, password, repeatpassword) VALUES ('%s','%s','%s','%s')", 
      $conn -> real_escape_string($_POST ["name"]),
      $conn -> real_escape_string($_POST ["email"]),
      $conn -> real_escape_string($_POST ["password"]),
      $conn -> real_escape_string($_POST ["repeatpassword"])
      );

    $conn -> query($sql1);
  }

  
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title> Register Student </title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
     <form action="action_page.php">
  <div class="container">
    <h1>Register Student</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label class="label-form" for="name"><b>Name</b></label>
    <input class="input-form" type="text" placeholder="Enter Name" name="Name" required>
      <br/>

    <label class="label-form" for="email"><b>Email</b></label>
    <input class="input-form" type="text" placeholder="Enter Email" name="email" required>
      <br/>

    <label class="label-form" for="studieretning"><b>Studieretning</b></label>
    <input class="input-form" type="text" placeholder="Enter studieretning" name="studieretning" required>
      <br/>

    <label class="label-form" for="kull"><b>Kull</b></label>
    <input class="input-form" type="text" placeholder="Enter Kull" name="Kull" required>
      <br/>

    <label class="label-form" for="psw"><b>Password</b></label>
    <input class="input-form" type="password" placeholder="Enter Password" name="psw" required>
      <br/>

    <label class="label-form" for="psw-repeat"><b>Repeat Password</b></label>
    <input class="input-form" type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <br/>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & PepegaPrivacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
    </form> 
</body>
</html>