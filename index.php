<?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 11-10-2017
 * Time: 22:23
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeScape - Home</title>

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
        <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF']; ?>">CodeScape</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php $_SERVER['PHP_SELF'];?>">Home
                     <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Over</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header with Background Image -->
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-3 text-center text-white mt-4">Het geleerde in de praktijk brengen</h1>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">Wie ben ik?</h2>
            <p>Mijn naam is Sander Lington. Ik ben student en zit in het examenjaar applicatie-ontwikkeling op het ROC van Flevoland.</p>
            <p>Webdevelopment is een verzamelnaam die wordt gebruikt voor alles wat met het realiseren van een website te maken heeft. Hier wordt onder andere verstaan: webdesign, client-side en server-side-programmeren en beheer van webservers.
            <p>Het is mij opgevallen dat niks te gek is in deze branche. Alles wordt geautomatiseerd in dit digitale tijdperk. Om hier veranderingen en verbeteringen in toe te passen, om deel te nemen hier in. Daar wordt ik blij van.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="about.php">Meer over mij &raquo;</a>
            </p>
        </div>
        <div class="col-sm-4">
            <h2 class="mt-4">Direct in Contact komen</h2>
            <address>
                <br>
                <i class="fa fa-home"> Straat van Florida 1, 1334 PA Almere</i>
                <br>
                <br>
                <i class="fa fa-phone"> 06 - 40068491</i>
                <br>
                <br>
                <i class="fa fa-envelope"></i>
                <a href="mailto:slington2@roc-dev.com">Stuur mij een e-mail</a>
            </address>
        </div>
    </div>
    <!-- /.row -->
<hr>
    <div class="row">
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="css/images/php_logo.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">PHP</h4>
                    <p class="card-text">PHP is mijn beste computertaal. In deze taal doe ik mijn examen.</p>
                </div>
                <div class="card-footer">
                    <a href="php-index.php" class="btn btn-primary">Projecten</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="css/images/jsp_logo.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">JSP</h4>
                    <p class="card-text">JSP beheers ik redelijk</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Projecten</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="css/images/db_logo.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Databases</h4>
                    <p class="card-text">Bekijk mijn databases!</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Projecten</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CodeScape 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

