<?php include 'php/nav.php'; ?>

<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lena Malkhasian</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                <!--padding-top: 60px;
                padding-bottom: 40px;-->
            background:black;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="masthead" style="width:100%">
                    <img src="img/banner.png"/>
        </div>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>
                <a class="brand" href="/">Lena m.</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">

<?php
    //TODO: need some php here to mark the "active" links.
    $page = basename($_SERVER['PHP_SELF']);
?>
                        <li class="<?php echo ($page == "index.php" ? "active" : "")?>"><a href="/">Home</a></li>
                        <li class="<?php echo ($page == "portfolio.php" ? "active" : "")?>"><a href="portfolio.php">Portfolio</a></li>
                        <li class="<?php echo ($page == "resume.php" ? "active" : "")?>" ><a href="resume.php">Resume</a></li>
                    </ul>
                    <!--
                        <form class="navbar-form pull-right">
                        <input class="span2" type="text" placeholder="Email">
                        <input class="span2" type="password" placeholder="Password">
                        <button type="submit" class="btn">Sign in</button>
                        </form>
                    -->
                </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>