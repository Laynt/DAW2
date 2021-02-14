<?php
session_start();

$apellidos = "";
if(filter_has_var(INPUT_POST, "apellidos")){ //
    $apellidos = filter_var(trim(filter_input(INPUT_POST,"apellidos")), FILTER_SANITIZE_STRING); //trim quita los espacios de delante y de atrás
}

if($apellidos == ""){
    $_SESSION["avisoApellidos"] = "no ha escrito sus apellidos"; //Seteo aviso apellidos
    header("Location:pagina3.php"); //me vuelve a la página3
    exit;
} else {
    unset($_SESSION["avisoApellidos"]);
    $_SESSION["apellidos"] = $apellidos;
    header("Location:pagina5.php");
    exit;

}