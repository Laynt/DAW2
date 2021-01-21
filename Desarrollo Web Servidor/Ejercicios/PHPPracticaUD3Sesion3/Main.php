<?php

include 'Animal.php';
include 'Persona.php';

//Ejercicio1
$perro = new Animal("GUUUUAAAAUUUU");
$perro->ladrar();
echo "\n \n";

//Ejercicio2

$persona = new Persona("Alvaro", "Torres");
$nombreCompleto = $persona->getNombreCompleto();
printf("El nombre de la persona es: $nombreCompleto");
echo "\n";
$edad = $persona->getEdad();
$fechaNAcimiento = $persona->getFechaNacimiento();
printf("Fecha nacimiento:". $fechaNacimiento->format('Y-m-d') . "\n");
printf("Edad: $edad");
echo "\n\n";

$persona2 = new Persona("Jesus", "Lopez Garcia", new DateTime("1998-4-2"));
$nombreCompleto = $persona->getNombreCompleto();
printf("El nombre de la persona es: $nombreCompleto");
echo "\n";
$edad2 = $persona->getEdad();
$fechaNAcimiento2 = $persona->getFechaNacimiento();
printf("Fecha nacimiento:". $fechaNacimiento2->format('Y-m-d') . "\n");
printf("Edad: $edad2");
echo "\n\n";