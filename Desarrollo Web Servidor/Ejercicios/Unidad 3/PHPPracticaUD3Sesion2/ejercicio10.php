<?php
$cad = readline("Introduce una cadena de texto");
function cuentaEspacios($cadena){
    $x =substr_count($cadena, ' ');
    echo $x;
}
cuentaEspacios($cad);