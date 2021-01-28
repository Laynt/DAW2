<?php

include 'Animal.php';
include 'Persona.php';
include 'Student.php';
include 'Enviroment.php';
include 'Vehiculo.php';
include 'Coche.php';
include 'Message.php';
include 'Email.php';
include 'SpaceStation.php';
include 'DeathStar.php';

//Ejercicio1
$perro = new Animal("GUUUUAAAAUUUU");
$perro->ladrar();
echo "\n \n";

//Ejercicio2

$persona = new Persona("Álvaro ", "Rogriguez Laynt");
$nombreCompleto = $persona->getNombreCompleto();
printf("El nombre de la persona es: $nombreCompleto \n");
$edad = $persona->getEdad();
$fechaNacimiento = $persona->getFechaNacimiento();
printf("Fecha nacimiento: ".$fechaNacimiento->format('Y-m-d')."\n");
printf("Edad: $edad\n\n");


$persona2 = new Persona("Jesús", "Lopez Cruz", new DateTime("1988-3-12"));
$nombreCompleto2 = $persona2->getNombreCompleto();
printf("El nombre de la persona es: $nombreCompleto2 \n");
$edad2 = $persona2->getEdad();
$fechaNacimiento2 = $persona2->getFechaNacimiento();
printf("Fecha nacimiento: ".$fechaNacimiento2->format('Y-m-d')."\n");
printf("Edad: $edad2");
echo "\n\n";

//Ejercicio 3

$student = new Student(2015);
$student->name = "Juan";
printf("Años desde la graduación: ".$student->getYearsSinceGraduation());
echo "\n\n";

//Ejercicio 4
Enviroment::$newLine = "\r\n";
$version = Enviroment::getVersion();
printf("Enviroment new line ".Enviroment::$newLine);
printf("Enviroment version es: ".$version);
echo "\n\n";

//Ejercicio 5

$vehiculaso = new Vehiculo();
$cochesito = new Coche();
$vehiculaso->printItem("Opel");
echo "\n\n";
$vehiculaso->printItem("Corsa");
echo "\n\n";

//Ejercicio 6

$email = new Email();
$email->setContent('Hola papá');
echo 'Contenido:' . $email->getContent();
echo "\n\n";

//Ejercicio 7

$disparo = new DeathStar();
$disparo->fireLaser();


