<?php

session_start();
if (!isset($_SESSION['login_state'])) {
    header("Location: index.html");
    exit();
}
?>

<html>
<head>
    <h1>INFORMACIÓ 2</h1>
</head>
<body>

    <h2> <?php echo $_SESSION['userlogin']; ?> </h2>

    <form action="logout.php" method="post">
        <input type="submit" value= "logout">
    </form>

    <h3> PAGINA 2 DE INFORMACIO </h3> <br><br>

    <a href="login_correcte.php"> ANAR A LA PAGINA INFO 1 </a><br><br>

</body>
</html>