<?php

session_start();

$user=$_POST['user'];
$password=$_POST['password'];

if ($user != $password) {

    session_destroy();
    header("Location: ./index.html");
    exit();
}

else {
    
    $_SESSION['userlogin']=$user;
    $_SESSION['login_state']=true;
    header("Location: ./login_correcte.php");
}
?>
