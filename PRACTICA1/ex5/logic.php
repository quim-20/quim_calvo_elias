<?php

$tipus = $_GET["tipus"];
$quantitat = $_GET["quantitat"];

if ($tipus == "general") {

    $import_iva = $quantitat * 1.21;
    echo "L'import de $quantitat euros, afegint impostos es de $import_iva euros totals"; 

}

elseif ($tipus == "ll_reduit") {

    $import_iva = $quantitat * 1.10;
    echo "L'import de $quantitat euros, afegint impostos es de $import_iva euros totals";

}

else {

    $import_iva = $quantitat * 1.04;
    echo "L'import de $quantitat euros, afegint impostos es de $import_iva euros totals";
}



?>