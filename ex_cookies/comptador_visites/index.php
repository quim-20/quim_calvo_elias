<?php

/*el fitxer hauria de contenir el nom comptador_visites.php , 
però no està posat per poder visibilitzar el php mitjançant el localhost */


$contador = 0;
if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"];
}

$comprat = false;
if (isset($_COOKIE["comprat"])) {
    $comprat = true;
/* la cookie de comprar se crea más abajo*/
}

$missatge = "";

if(isset($_POST["comprar"]))  { /*si s'ha donat al botó de comprar*/

    $codi = $_POST["codi"];
/* referencia al codi que se aplica en el form */

    if ($codi == "") {
        $missatge = "Compra sense descompte.";
        setcookie("comprat", "true", time() + 3600); /* expira en una hora */
        $contador = 0;                                  
        setcookie("contador", 0, time() + 3600);
        $comprat = true;

    }

    elseif ($codi == "BOTIGA20" && $contador >= 5 && $contador < 10 && $comprat == false) {
        $missatge = "compra realitzada amb un 20% de descompte.";
        setcookie("comprat", "true", time() + 3600);
        $contador = 0;                                 
        setcookie("contador", 0, time() + 3600);
        $comprat = true;

    }

    elseif ($codi == "BOTIGA50" && $contador >= 10 && $comprat == false) {
        $missatge = "Compra realitzada amb un 50% de descompte.";
        setcookie("comprat", "true", time() + 3600);
        $contador = 0;                                
        setcookie("contador", 0, time() + 3600);
        $comprat = true;

    }

    else {
        $missatge = "codi no vàlid.";

    }

} 

else { /*si no s'ha donat al botó de comprar*/
    $contador = $contador +1;
    setcookie("contador", $contador, time() + 3600);

}


?>

<html>
<head>
</head>
<body>
    <h1> COMPTADOR DE VISITES</h1>
    <?php
    echo "NUMERO DE VISITES: " . $contador;

    if ($comprat == false) {

        if ($contador >= 10) {

            echo "OFERTA, UTILITZA EL CODI BOTIGA50";
        }

        elseif ($contador >= 5) {
            echo "OFERTA, UTILITZA EL CODI BOTIGA20";
        }

    }

    echo $missatge;
    ?>

    <br><br>

    <form method="post" action="">
        <input type="text" name="codi"> CODI DE DESCOMPTE:
        <br>
        <input type="submit" name="comprar" value="comprar">
    </form>
</body>
</html>



