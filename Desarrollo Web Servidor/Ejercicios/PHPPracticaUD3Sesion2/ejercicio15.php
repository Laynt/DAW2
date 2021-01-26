<?php
$x = readline("Por favor introduzca un fichero a borrar");
if (!unlink($x)) {  
    echo ("ERROR: El fichero " . $x . " no existe");  
}  
else {  
    echo ("El fichero: " . $x . " se ha eliminado");  
}  