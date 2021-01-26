<?php
$countries =array(
    "España" => "Madrid",
    "Francia" => "Paris",
    "Alemania" => "Berlin",
    "Italia" => "Roma",
    "Portugal" => "Lisboa",
    "Polonia" => "Varsovia"
    );

$capitalN = readline("Dime el nombre de una capital ");
var_dump($countries); 
$country = array_search($capitalN, $countries);
print_r("El país de: $capitalN es $country");

