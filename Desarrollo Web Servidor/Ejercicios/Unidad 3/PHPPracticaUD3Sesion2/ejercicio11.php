<?php 
// PHP code to check wether a number is prime or Not 
// function to check the number is Prime or Not 
$num = readline("Introduzca un numero");
function esPrimo($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
// Driver Code 
 
$flag = esPrimo($num); 
if ($flag == 1) 
    echo $num ." es un numero primo"; 
else
    echo $num ." no es un numero primo";