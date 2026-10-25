<?php

session_start();


if (isset($_POST['quant_jaume_serra'])) {
    $_SESSION['quant_total_jaume_serra'] += $_POST['quant_jaume_serra'];
    $_SESSION['preu_jaume_serra'] += ($_POST['quant_total_jaume_serra'] * 35);
    header("Location: index.html");

}

if (isset($_POST['quant_pata_negra'])) {
    $_SESSION['quant_total_pata_negra'] += $_POST['quant_pata_negra'];
    $_SESSION['preu_pata_negra'] += ($_POST['quant_total_pata_negra'] * 50);
    header("Location: index.html");
}

?>
