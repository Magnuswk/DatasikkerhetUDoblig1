<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/pepega.png"/>

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
                <a class="navbar-item" href="StudRegister.php">Registrering Student</a>
                <a class="navbar-item" href="ForeleserRegister.php">Registrering Foreleser</a>
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
    
        <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-pic js-tilt" data-tilt>
                            <img src="images/assets/img-01.png" alt="PEPEGA">
                        </div>
        
                        <form class="login100-form validate-form">
                            <span class="login100-form-title">
                                User login
                            </span>
        
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" placeholder="Email" id="email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
        
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input class="input100" type="password" name="pass" placeholder="Password" id="password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            
                            <div class="container-login100-form-btn">
                                <button onclick="logIn()" id="logIn" class="login100-form-btn">
                                    Login
                                </button>
                            </div>
        
                            <div class="text-center p-t-12">
                                <span class="txt1">
                                    Forgot
                                </span>
                                <a class="txt2" href="#">
                                    Username / Password?
                                </a>
                            </div>
        
                            <div class="text-center p-t-136">
                                <a class="txt2" href="#">
                                    Create your Account
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

</body>
</html>

