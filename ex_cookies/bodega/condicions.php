<?php

$missatge ="";

if (isset($_COOKIE["majoredat"]) && isset($_COOKIE["idioma"]) && isset($_COOKIE["moneda"])) {

    $majoredat = $_COOKIE["majoredat"];
    $idioma = $_COOKIE["idioma"];
    $moneda = $_COOKIE["moneda"];
    
    if ($majoredat == "no") {

        if ($idioma == "catala") {
            $missatge = "No esta permes vendre alcohol a menors dedat.";
        }
        elseif ($idioma == "castella") {
            $missatge = "No esta permitido vender alcohol a menores de edad.";
        }
        else {
            $missatge = "it is forbidden to sell alcohol products if you are under 18.";
        }

    }

    else {
    /* si ets major d'edat*/

        if ($majoredat == "si" && $idioma == "catala" && $moneda == "euro") {
        $missatge = "T oferim el vi Les Terrasses a un preu de 39 euros";
    }
        else {

            if ($idioma == "castella") {
                $missatge = "El cava Pata Negra, de la mejor bodega del mundo, cuesta 50" . $moneda;

            }

            elseif ($idioma == "catala" && $moneda !="euro") {
                $missatge = "El cava Pata Negra, del millor celler del mon, costa 50" . $moneda;

            }

            else {
                $missatge = "Pata Negra cava, from the best winery in the world, costs 50" . $moneda;
            }
        }

    }
    
}
else {
    $missatge = "Omplir el formulari es necessari";
}

?>

<html>
<head>
</head>
<body>
    <h1> BODEGA </h1>

    <?php
        echo $missatge;
    ?>

    <a href="index.php">Tornar</a>
</body>
</html>