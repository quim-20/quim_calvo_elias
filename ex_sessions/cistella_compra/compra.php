<?php

session_start();

echo "Cava Jaume serra: ...." . $_SESSION["quant_total_jaume_serra"] . "-->" . $_SESSION['preu_total_jaume_serra'] . "Euros";
echo "Vi Pata Negra ........" . $_SESSION["quant_total_pata_negra"] . "-->" . $_SESSION['preu_total_pata_negra'] . "Euros";
echo "Total ................" . ($_SESSION["preu_total_jaume_serra"] + $_SESSION["preu_total_pata_negra"]) . "Euros";

?>

<a href="finalitzar_compra.php">Finalitzar compra</a>
<a href="index.html">Continuar comprant</a>