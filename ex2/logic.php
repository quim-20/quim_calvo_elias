<?php

$quantitat = $_GET["quantitat"];
$tipus = $_GET["tipus"];


if (
    $tipus == "cv_dolar") {
        $resultat = $quantitat * 1.10;
        echo "$quantitat euros son $resultat dolars";
    }

    else { 
        $resultat = $quantitat / 1.10;
        echo "$quantitat dolars son $resultat euros";
    }
    
?>
