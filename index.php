<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gruppe 11</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/assets/images/pepega.png"/>

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
                <a class="navbar-item" href="index.php"> Home </a>
                <a class="navbar-item" href="Emne.php"> Emne </a>
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

<!-- White-Section
  ================================================== -->

<div class="white-section row">

    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="assets/images/foreleser.jpg">
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light"> Foreleser? </h2>

            <div class="imac-section-desc">

            <span> Her kan foreleser registrere seg slik at man kan få lagt til sitt emne og få tilbakemeldinger / meldinger om sine emner!  </span>
            </div>
            
            <a href="ForeleserRegister.html">
                    <button class="hero-btn"> Registrer Her </button>
                </a>
        </div>
    </div>
</div><!--white-section-text-section--->


<!-- Features
  ================================================== -->

<div id="features" class="features-section">

    <div class="features-container row">

        <h2 class="features-headline light">FEATURES</h2>

        <div class="col-sm-4 feature">

            <div class="feature-icon feature-no-display">
                <img class="feature-img" src="assets/images/responsive.svg">
            </div>
            <h5 class="feature-head-text feature-no-display"> FULL APP ACCESS </h5>
            <p class="feature-subtext light feature-no-display"> Med vår app har du tilgang til akkurat det samme som på nettsiden! Lett tilgjengelig når som helst!</p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-mid">
                <img class="feature-img" src="assets/images/customizable.svg">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-mid"> APACHE SERVER </h5>
            <p class="feature-subtext light feature-no-display feature-display-mid"> Vår APACHE server er top notch! Med flere uker (eller under en uke) med utvikling har vi en fantastisk grunnstruktur.</p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-last">
                <img class="bullet-img" src="assets/images/design.svg">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-last"> Vakkert Design! </h5>
            <p class="feature-subtext light feature-no-display feature-display-last"> Vårt design tok hele tyve minutter å lage! Se så bra det ble.</p>
        </div>
    </div> <!--features-container-->
</div> <!--features-section-->





<!-- Footer
  ================================================== -->

<div class="footer">

    <div class="container">
        <div class="row">

            <div class="col-sm-8 webscope">
                <span class="webscope-text"> All right reserved </span>
            </div>
            <!--webscope-->

        </div>
        <!--row-->

    </div>
    <!--container-->
</div>
<!--footer-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>

</body>

</html>