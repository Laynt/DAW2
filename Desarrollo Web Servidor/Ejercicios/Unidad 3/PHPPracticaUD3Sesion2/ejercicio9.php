<?php
$num1 = readline("Dame un numero");
$num2 = readline("Dame otro numero");

function suma($num1, $num2){
    $res1 = $num1 + $num2;
    print_r("El resultado de la suma es: " . $res1);
}
function resta($num1, $num2){
    $res2 = $num1 - $num2;
    print_r("El resultado de la resta es: " . $res2);
}
suma($num1, $num2);
echo "\n";
resta($num1, $num2);