<?php
session_start(); //Iniciamos la sesión

unset($_SESSION["apellidos"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Formulario en dos pasos (Formulario2)<h1>
    <form action="pagina4.php" method="post">
    <p><label>Apellidos: <input type="text" name="apellidos" size"20" maxlength="20"></label>
    <?php 
    if(isset($_SESSION["avisoApellidos"])) { //si esta seteado el valor de avisoApellidos en mi variable SESSION
        print "<span class=\"aviso\">$_SESSION[avisoApellidos]</span></p>";
    }
    ?>
    <p>
        <input type="submit" value="Siguiente">
        <input type="reset" value="Borrar">
    </p>
    </form>
</body>
</html>