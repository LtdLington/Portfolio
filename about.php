<?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 12-10-2017
 * Time: 01:43
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeScape - Over mij</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- Custom styles for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">CodeScape</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""<?php $_SERVER['PHP_SELF']; ?>">Over</a>
                    <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header with Background Image -->
<header class="business-header-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-3 text-center text-white mt-4"></h1>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">Over mij</h2>
            <p>Mijn naam is Sander Lington. Ik ben student en zit in het examenjaar applicatie-ontwikkeling op het ROC van Flevoland.</p>
            <p>Webdevelopment is een verzamelnaam die wordt gebruikt voor alles wat met het realiseren van een website te maken heeft. Hier wordt onder andere verstaan: webdesign, client-side en server-side-programmeren en beheer van webservers.
            <p>Het is mij opgevallen dat niks te gek is in deze branche. Alles wordt geautomatiseerd in dit digitale tijdperk. Om hier veranderingen en verbeteringen in toe te passen, om deel te nemen hier in. Daar wordt ik blij van.</p>

        </div>
        <div class="col-sm-4">
            <h2 class="mt-4">Social media</h2>
            <address>
                <br>
                <i class="fa fa-github"> <a href="https://github.com/LtdLington" target="_blanck"> Github</a></i>
                <br>
                <br>
                <i class="fa fa-linkedin-square"> <a href="https://www.linkedin.com/in/sander-lington-b34276113/"> Linkedin</a></i>
                <br>
                <br>
                <i class="fa fa-instagram"> <a href="https://www.instagram.com/santje.97/?hl=nl"> Instagram</a> </i>
                <br>
                <br>
                <i class="fa fa-facebook-square"> <a href="#"> Facebook</a> </i>
            </address>
        </div>
    </div>
</div>
    <hr>
    <center><h3>More comming soon </h3></center>
<br>
<br>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CodeScape 2017</p>
    </div>
    <!-- /.container -->
</footer>
</body>
</html>

