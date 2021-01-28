<?php
$miArchivo = fopen("miarchivo.txt", "w");
$txt = "Esto es una prueba\n";
fwrite($miArchivo, $txt);
fclose($miArchivo);