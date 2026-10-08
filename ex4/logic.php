<?php

$tipus = $_GET["tipus"];

if ($tipus == "pop") {

    echo "OH! T'agrada el $tipus! Segur que també ets fan de Tylor Swift";
    
}

elseif ($tipus == "k-pop") {

    echo "T'agrada el $tipus? T'agradarà BTS, i segur que vols aprendre coreà també";

}

elseif ($tipus == "rock") {

    echo "Ets gent de cultura! El $tipus es el millor tipus de música que n'hi ha!";

}

elseif ($tipus == "hip-hop") {

    echo "El $tipus es molt interessant! Coneixes a JuiceWRLD?";
}

else {

    echo "El $tipus es el tipus més escoltat avui dia, el més conegut es Bad Bunny";

}

?>