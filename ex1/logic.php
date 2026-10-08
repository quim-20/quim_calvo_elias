<?php




if (!empty($_GET["nombre"]) &&
    !empty($_GET["apellidos"]) &&
    !empty($_GET["email"]) &&
    !empty($_GET["mensaje"])){

    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $mensaje = $_GET["mensaje"];
    $email = $_GET["email"];


    
    
    echo "mensaje recibido, " .$nombre. " ".$apellidos. " Gracias por contactar. Te responderemos al ".$email;
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";        


}  



else {    

    echo "No s'ha desat el missatge. Error.";
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";        
    }  
?>



