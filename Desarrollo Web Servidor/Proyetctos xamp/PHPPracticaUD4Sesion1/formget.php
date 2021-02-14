<?php
$nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : ""; //El isset es como un if
printf("Hola $nombre"); 
echo "<br>";
$email = isset($_GET["email"]) ? $_GET["email"] : "";
echo "Tu email es: $email";
