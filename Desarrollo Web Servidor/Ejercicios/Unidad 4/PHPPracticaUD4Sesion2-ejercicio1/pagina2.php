<?php
session_start();

$nombre = "";
if(filter_has_var(INPUT_POST, "nombre")){
    $nombre = filter_var(trim(filter_input(INPUT_POST,"NOMBRE")), FILTER_SANITIZE_STRING);
}

if($nombre == ""){
    $_SESSION["avisoNombre"] = "no ha escrito su nombre";
    header("Location:pagina1.php");
    exit;
} else {
    unset($_SESSION["avisoNombre"]);
    $_SESSION["nombre"] = $nombre;
    header("Location:pagina3.php");
    exit;

}