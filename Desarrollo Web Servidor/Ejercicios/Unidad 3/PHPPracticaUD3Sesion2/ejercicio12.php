<?php
// Incluir el fichero
require "mis_funciones.php";

$num = readline("Por favor introduzca un número: ");
$cuadrado = cuadrado($num);
echo "El cuadrado de $num es $cuadrado";