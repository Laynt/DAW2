<?php
 $x = array(1, 2, 3, 4, 5);
 $char = readline("Dame un caracter a introducir");
 $index = readline("Dame la posición a insertarlo");
 foreach ($x as $value) { //Imprimo el array
    echo $value ." " ;
}
echo "\n";
array_splice( $x, $index, 0, $char );
foreach ($x as $value) { //Imprimo el array
    echo $value ." " ;
}