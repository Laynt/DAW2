
<?php
include 'Calculadora.php';
include 'DivisionPorCero.php';
include 'App/User.php';
use App\Student as Estudiante;


//Ejercicio 1

$calculadora = new Calculadora();
$numerador = readline("Introduzca el numerador: ");
$denominador = readline("Introduzca el denominador: ");

try {
    
    $resultado = $calculadora->dividir($numerador, $denominador);
    printf("\nEl resultado de la división es: $resultado");
    

    
}catch(DivisionPorCero $e) {
    echo $e->errorMessage();   
}
echo "\n \n";

//Ejercicio 2

$user = new App\User("Pedro");
echo "El usuario se llama: ".$user->getName();
echo "\n \n";

$estudiante = new Estudiante("Juan");
echo "El estudiante se llama: ".$estudiante->getName();
echo "\n \n";

//Ejercicio 3 ArrayObject


echo "-Ejercicio 3\n";
$animales = array('perro', 'gato', 'conejo', 'cerdo', 'caballo');
$objeto = new ArrayObject($animales);
echo "Número de animales: ".$objeto->count()."\n";
$objeto->append('canguro');
for($iterador = $objeto->getIterator();
	$iterador->valid();
	$iterador->next())
{
	echo $iterador->key() . " => " . $iterador->current() . "\n";
}

