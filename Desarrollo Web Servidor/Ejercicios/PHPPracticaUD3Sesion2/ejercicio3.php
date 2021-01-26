<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  for ($row = 0; $row < count($cars); $row++) {
    echo "Fila $row".", Modelo: ".$cars[$row][0].", en stock: ".$cars[$row][1].", vendidos: ".$cars[$row][1];
    echo "\n";
  }
  