<!DOCTYPE html>
<html>
<!--
     __      _____  ______  __      ______  __    __  ______   _____
    |  |    |   __||   ___||  |    |  __  ||  |  |  ||   _  \ |   __|
    |  |    |  |__ |  |    |  |    | |__| ||  |  |  ||  |  \ \|  |__
    |  |    |   __||  |    |  |    |  __  ||  |  |  ||  |  | ||   __|
    |  |___ |  |__ |  |___ |  |___ | |  | ||  |__|  ||  |__/ /|  |__
    |______||_____||______||______||_|  |_||________||______/ |_____|

-->
<!--*************** HEAD ***************-->
    <head>
        <!-- AFFICHAGE -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- SEO A COMPLETER -->
        <meta name="title" content="Alexandre CLAUDON Resume">
        <meta name="description" content="Discover Alexandre CLAUDON, a web developer in the Luxembourg area.">
        <!-- TITRE -->
        <title>Alexandre CLAUDON</title>
    <!--*************** LINKS ***************-->
        <!-- NORMALIZE -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- FONT AWESOME CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <!-- BOOTSTRAP CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <!-- JQUERY UI CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
        <!-- SLIDER -->
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <!-- MY CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- GOOGLE CAPTCHA API -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <!--*************** BODY ***************-->
    <body>
        <div class="main">
            <div class="before">

            </div>
            <header>
                <!-- Logo -->
                <div class="logo">
                    <div class="l1">
                        <div class="t">T</div>
                    </div>
                    <div class="l2">
                        <div class="r">R</div>
                    </div>
                    <div class="l3">
                        <div class="l">L</div>
                    </div>
                    <div class="l4">
                        <div class="b">B</div>
                    </div>
                </div>
                <!-- Navbar -->
                <?php if (substr($_SERVER['REQUEST_URI'],-11)=='contact.php'):?>
                    <a id="back" href="index.php"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                <?php else: ?>
                    <nav class="bignav">
                        <ul>
                            <li><a href="#home">HOME</a></li>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#resume">RESUME</a></li>
                            <li><a href="#social">SOCIAL</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                    <nav class="dropdown">
                      <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#resume">RESUME</a></li>
                        <li><a href="#social">SOCIAL</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                      </ul>
                    </nav>
                <?php endif ; ?>
            </header>
