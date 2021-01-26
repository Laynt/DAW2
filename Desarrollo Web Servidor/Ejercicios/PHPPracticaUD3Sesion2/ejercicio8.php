<?php
function saludarParam($nombre){
    echo "¡Bienvenido amigo $nombre!\n";
    echo "¡Que tengas un buen día!";
}

$nombre = readline("Por favor introduzca su nombre: ");
saludarParam($nombre);