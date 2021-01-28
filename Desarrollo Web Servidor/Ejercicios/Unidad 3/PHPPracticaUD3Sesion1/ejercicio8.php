<?php

$num1 = readline("Introducir el primer número");
$mayor = $num1;
$num2 = readline("Introducir el segundo número");
if($num1 < $num2){
    $mayor = $num2;
    
}
$num3 = readline("Introducir el tercer número");
if($num1 < $num3 || $num2< $num3){
    $mayor = $num3;
    
}
echo "$mayor";
