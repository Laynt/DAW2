<?php
session_start();

$nombre = "";
if(filter_has_var(INPUT_POST, "nombre")){ //
    $nombre = filter_var(trim(filter_input(INPUT_POST,"nombre")), FILTER_SANITIZE_STRING); //trim quita los espacios de delante y de atrás
}

if($nombre == ""){
    $_SESSION["avisoNombre"] = "no ha escrito su nombre"; //Seteo aviso nombre
    header("Location:pagina1.php"); //me vuelve a la página1
    exit;
} else {
    unset($_SESSION["avisoNombre"]);
    $_SESSION["nombre"] = $nombre;
    header("Location:pagina3.php");
    exit;

}