<?php
session_start(); //Iniciamos la sesión
//Borramos los datos por si abrimos de nuevo la sesion
//para que sean valores nuevos y no los que ya teníamos
unset($_SESSION["nombre"]);
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
    <h1>Formulario en dos pasos (Formulario1)<h1>
    <form action="pagina2.php" method="post">
    <p><label>Nombre: <input type="text" name="nombre" size"20" maxlength="20"></label>
    <?php 
    if(isset($_SESSION["avisoNombre"])) { //si esta seteado el valor de avisoNombre en mi variable SESSION
        print "<span class=\"aviso\">$_SESSION[avisoNombre]</span></p>";
    }
    ?>
    <p>
        <input type="submit" value="Siguiente">
        <input type="reset" value="Borrar">
    </p>
    </form>
    <?php   
    print "<p>Su nombre y apellidos son: <Strong>$_SESSION[nombre] $_SESSION[apellidos]</Strong></p>";
    ?>
</body>
</html>

