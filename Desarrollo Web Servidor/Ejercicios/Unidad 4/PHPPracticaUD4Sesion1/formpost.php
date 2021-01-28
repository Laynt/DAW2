<?php
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
printf("Hola $nombre"); 
echo "<br>";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
echo "Tu email es: $email";
