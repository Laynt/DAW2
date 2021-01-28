
<?php
include 'Calculadora.php';
include 'DivisionPorCero.php';

$calculadora = new Calculadora();
$numerador = readline("Introduzca el numerador: ");
$denominador = readline("Introduzca el denominador: ");

try {
    $resultado = $calculadora->dividir($numerador, $denominador);
    printf("\nEl resultado de la división es: $resultado");
}catch(DivisionPorCero $e) {
    echo "\nError: JAMAS DIVIDAS POR 0";
}catch(Exception $e){
    echo "\nError: ".$e->getMessage();    
}

