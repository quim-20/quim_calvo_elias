<?php

$error = "";

if (isset($_POST["enviar"])) {

    $majoredat = $_POST["majoredat"];
    $moneda = $_POST["moneda"];
    $idioma = $_POST["idioma"];

    if (($majoredat == "si" || $majoredat == "no") &&
        ($idioma == "catala" || $idioma == "castella" || $idioma == "angles") &&
        ($moneda == "euro" || $moneda == "lliura" || $moneda == "dolar")) {

        // Guardamos las 3 cookies (duran 1 hora)
        setcookie("majoredat", $majoredat, time() + 3600);
        setcookie("idioma", $idioma, time() + 3600);
        setcookie("moneda", $moneda, time() + 3600);

        // Vamos a la otra página
        header("Location: condicions.php");
        exit;

    } else {
        $error = "Dades no vàlides, torna-ho a provar.";
    }

}

?>


<html>
<head>
</head>
<body>
        <h1>BODEGA</h1>


    <form method="post" action="">
        <h2>ETS MAJOR D'EDAT?</h2>
        <select name="majoredat">
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select><br>

        <h3>IDIOMA</h3>
        <select name="idioma">
            <option value="castella">Castella</opion>
            <option value="catala">Catala</opion>
            <option value="angles">Angles</opion>
        </select><br>

        <h4>MONEDA</h4>
        <select name="moneda">
            <option value="euro">EURO</option>
            <option value="lliura">LLIURA</option>
            <option value="dolar">DOLAR</option>
        </select><br>

        <input type="submit" name="enviar" value="enviar">
    
    </form>
</body>
</html>








