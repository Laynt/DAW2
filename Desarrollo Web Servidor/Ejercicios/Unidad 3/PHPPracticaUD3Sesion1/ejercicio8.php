<?php

$num1 = readline("Introducir el primer n�mero");
$mayor = $num1;
$num2 = readline("Introducir el segundo n�mero");
if($num1 < $num2){
    $mayor = $num2;
    
}
$num3 = readline("Introducir el tercer n�mero");
if($num1 < $num3 || $num2< $num3){
    $mayor = $num3;
    
}
echo "$mayor";
