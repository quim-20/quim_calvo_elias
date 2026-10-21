<?php

$hora = date('H');

if ($hora >= 5 && $hora <= 14) {

    echo "Bon dia, son les $hora";
}

elseif ($hora >= 14 && $hora <= 19) {

    echo "Bona tarda, son les $hora";
}

else {

    echo "Bona nit, son les $hora";
}


?>
