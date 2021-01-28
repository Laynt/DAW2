<?php
$x = readline("Por favor introduzca un fichero a leer");
$myfile = fopen($x, "r") or die("ERROR: El fichero: " . $x . " no existe");
echo 'El fichero ' . $x . ' tiene el siguiente contenido:'. "\n";
echo fgets($myfile);
fclose($myfile);
