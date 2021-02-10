<?php
session_start();

$pal1 = "";

if( filter_var($pal1, FILTER_VALIDATE_REGEXP,array("options" => array("regexp"=>'^[a-zA-Z0-9]\w+$')))){ 
    $pal1 = filter_var(trim(filter_input(INPUT_POST,"pal1")), FILTER_SANITIZE_STRING);
}


 else {
    unset($_SESSION["avisoError"]);
    $_SESSION["pal1"] = $pal1;
    header("Location:pagina3.php");
    exit;

}