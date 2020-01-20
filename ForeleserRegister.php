<?php

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title> Register Foreleser </title>
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
    
    <!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
        <img class="strips" src="assets/images/strips.png">
    </div>
    <div class="container">
        <div class="header-container header">
            <a href="Login.php">
                <button class="header-btn"> Log in </button>
            </a>
            <div class="header-right">
                <a class="navbar-item" href="#team"></a>
                <a class="navbar-item" href="StudRegister.html">Registrering Student</a>
                <a class="navbar-item" href="ForeleserRegister.html">Registrering Foreleser</a>
            </div>
        </div>
        <!--navigation-->


        <!-- Hero-Section
          ================================================== -->

        <div class="hero row">
            <div class="hero-right col-sm-6 col-sm-6">
                <h1 class="header-headline bold"> Student? <br></h1>
                <h4 class="header-running-text light"> Alle studenter kan registrere seg her slik at dere kan få logget inn og gitt deres tilbakemeldinger!  </h4>
                <a href="StudRegister.html">
                    <button class="hero-btn"> Registrer Her </button>
                </a>
            </div><!--hero-left-->

            <div class="col-sm-6 col-sm-6 ipad">
                <img class="ipad-screen img-responsive" src="assets/images/supremeleader.jpg"/>
            </div>

            <div><img class="mouse" src="assets/images/mouse.svg"/></div>

        </div><!--hero-->

    </div> <!--hero-container-->

</div><!--hero-background-->
    
     <form action="action_page.php">
  <div class="container">
    <h1>Registrer Foreleser</h1>
    <p>Fyll inn i skjema for å lage en konto</p>
    <hr>

    <label class="label-form" for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>
      <br/>

    <label class="label-form" for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
      <br/>
      
    <label class="label-form" for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
      <br/>

    <label class="label-form" for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <br/>
      <br/>
      <br/>
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