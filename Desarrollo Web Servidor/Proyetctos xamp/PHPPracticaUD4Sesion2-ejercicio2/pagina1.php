<?php
session_start(); //Iniciamos la sesión
unset($_SESSION["avisoError"]);
unset($_SESSION["pal1"]);
unset($_SESSION["pal2"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Formularios consecutivos 1<h1>
    <form action="pagina2.php" method="post">
    <p><label>Palabra Uno: <input type="text" name="pal1" size"20" maxlength="10"></label>
    <?php 
    if(isset($_SESSION["avisoError"])) { 
        print "<span class=\"aviso\">$_SESSION[avisoError]</span></p>";
    }
    ?>
    <p>
        <input type="submit" value="Siguiente">
        <input type="reset" value="Borrar">
    </p>
    </form>
</body>
</html>