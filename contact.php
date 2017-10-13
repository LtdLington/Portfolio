<?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 12-10-2017
 * Time: 09:36
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeScape - Contact</title>

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
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Over</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $_SERVER['PHP_SELF'];?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header with Background Image -->
<header class="business-header-contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.7887611685906!2d5.275173116164772!3d52.392379579790244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c617c1dcedf6af%3A0xb7e60f149191e0f!2sROC+van+Flevoland+-+MBO+College+Almere+(Buiten)!5e0!3m2!1snl!2snl!4v1507797066081" width="1920" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</header>
<div class="h3-title"><h3>Contact</h3></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Naam</label>
                                <input type="text" class="form-control" id="name" placeholder="Uw naam" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    E-mailaddress</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" id="email" placeholder="Typ E-mailadress" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Onderwerp</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Kies een:</option>
                                    <option value="service">Vraag</option>
                                    <option value="suggestions">Sugesstie</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Bericht</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                          placeholder="Typ uw berichts"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Verstuur</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span>Contactgegevens</legend>
                <address>
                    <br>
                    <i class="fa fa-home"> Straat van Florida 1, 1334 PA Almere</i>
                    <br>
                    <br>
                    <i class="fa fa-phone"> 06 - 40068491</i>
                    <br>
                    <br>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:slington2@roc-dev.com">slington2@roc-dev.com</a>
                </address>
            </form>
        </div>
    </div>
</div>
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
