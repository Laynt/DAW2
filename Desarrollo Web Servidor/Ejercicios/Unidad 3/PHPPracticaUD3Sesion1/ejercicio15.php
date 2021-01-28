<?php

$cad = readline("Introduce una cadena de caracteres ");
$elim = readline("¿Que quieres elminar del string? ");
str_replace($elim, " ", $cad);
echo "$cad";