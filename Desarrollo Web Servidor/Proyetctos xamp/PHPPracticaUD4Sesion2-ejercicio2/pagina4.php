<?php
session_start();

$pal2 = "";
$postdata = $_POST['pal1'];
if($pal2 == $postdata){
    $pal2 = $postdata;
}


if($pal2 == ""){
    $_SESSION["avisoError"] = "¡No has escrito NADA"; 
    header("Location:pagina3.php"); 
    exit;
} else {
    unset($_SESSION["avisoError"]);
    $_SESSION["pal2"] = $pal2;
    header("Location:pagina5.php");
    exit;

}