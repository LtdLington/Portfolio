<?php
class Auto {
    private $merk;
    private $type;
    private $prijs;
    private $fotoURL;
    public function __construct($merk, $type, $prijs, $fotoURL) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->fotoURL = $fotoURL;
    }
    public function getMerk() {
        return $this->merk;
    }
    public function getType() {
        return $this->type;
    }
    public function getPrijs() {
        return $this->prijs;
    }
    public function getFotoURL() {
        return $this->fotoURL;
    }
}
$lijst = array (
    new Auto ( "Audi", "A4", "65110", "/portfolio/css/images/opdrachten/autos/audia4.jpg" ),
    new Auto ( "Audi", "Q4", "81990", "/portfolio/css/images/opdrachten/autos/audiq7.jpg" ),
    new Auto ( "Audi", "R8", "66250", "/portfolio/css/images/opdrachten/autos/audir8.jpg" ),
    new Auto ( "Audi", "TTS Coupe", "262230", "/portfolio/css/images/opdrachten/autos/audittscoupe.jpg" ),
    new Auto ( "Bentley", "Continental gt", "28450", "/portfolio/css/images/opdrachten/autos/bentleycontinentalgt.jpg" ),
    new Auto ( "Bmw", "x5", "31500", "/portfolio/css/images/opdrachten/autos/bmwx5.jpg" ),
    new Auto ( "Range Rover", "Sport", "192400", "/portfolio/css/images/opdrachten/autos/rangeroversport.jpg" ),
    new Auto ( "Cadillac", "SRXV Sport luxury", "89880", "/portfolio/css/images/opdrachten/autos/cadillacsrxv6sportluxury.jpg" ),
    new Auto ( "Chrysler", "Crossfire", "188600", "/portfolio/css/images/opdrachten/autos/Chrysler_Crossfire.jpg" ),
    new Auto ( "Chrysler", "Voyager", "36700", "/portfolio/css/images/opdrachten/autos/chryslervoyager.jpg" ),
    new Auto ( "Corvette", "C6", "310100", "/portfolio/css/images/opdrachten/autos/corvettec6.jpg" ),
    new Auto ( "Ferarri", "488gtb", "61288", "/portfolio/css/images/opdrachten/autos/ferrari488gtb.jpg" ),
    new Auto ( "GMC", "Yuko XL", "79600", "/portfolio/css/images/opdrachten/autos/gmcyukonxl.jpg" ),
    new Auto ( "Jeep", "Grand Cherokee", "75250", "/portfolio/css/images/opdrachten/autos/jeepgrandcherokee.jpg" ),
    new Auto ( "Jeep", "Wrangler", "425900", "/portfolio/css/images/opdrachten/autos/jeepwrangler.jpg" ),
    new Auto ( "Lamborghini", "Aventador", "425900", "/portfolio/css/images/opdrachten/autos/lamborghini.jpg" ),
    new Auto ( "Landrover", "Discovery", "98450", "/portfolio/css/images/opdrachten/autos/landroverdiscovery.jpg" ),
    new Auto ( "Mclaren", "", "189500", "/portfolio/css/images/opdrachten/autos/mclaren.jpg" ),
    new Auto ( "Porsche", "911", "220500", "/portfolio/css/images/opdrachten/autos/porsche911.jpg" ),
    new Auto ( "Porsche", "Cayenne", "140000", "/portfolio/css/images/opdrachten/autos/porschecayenne.jpg" )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeScape - Auto webshop</title>

    <!-- Bootstrap core CSS -->
    <link href="/portfolio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/portfolio/css/auto-shop.css" rel="stylesheet">

    <!-- Custom styles for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="number" name="min_prijs" placeholder="Minimum prijs"> <input
            type="number" name="max_prijs" placeholder="Maximum prijs"> <select
            name="merk">
        <option value="alle">Alle merken</option>
        <?php
        $merken = array ();
        foreach ( $lijst as $auto ) {
            if (! in_array ( $auto->getMerk (), $merken )) {
                array_push ( $merken, $auto->getMerk () );
            }
        }
        foreach ( $merken as $merk ) {
            echo "<option value=" . $merk . ">" . $merk . "</option>";
        }
        ?>
    </select>
    <input type="submit" name="submit" value="OK">
</form>
<center>
    <br>
    <a href="/portfolio/php-index.php">Terug naar PHP projecten</a></li>
    <br>
<?php
foreach ( $lijst as $auto ) {
    if (! isset ( $_POST ["submit"] )
        || (isset ( $_POST ["submit"] ) && ($auto->getPrijs () >= $_POST ["min_prijs"]
                || $_POST ["min_prijs"] == "") && ($auto->getPrijs () <= $_POST ["max_prijs"]
                || $_POST ["max_prijs"] == "") && ($auto->getMerk () == $_POST ["merk"]
                || $_POST ["merk"] == "alle"))) {
        echo "<div>";
        echo $auto->getMerk () . " " . $auto->getType () . "<br>";
        echo "Prijs:$ " . $auto->getPrijs () . ",-<br>";
        echo "<img src='" . $auto->getFotoURL () . "'><br><br>";
        echo "</div>";
    }
}
?>

</center>
</body>

</html>
