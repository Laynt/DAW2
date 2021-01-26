
<?php
// Array con los nombres de los días de la semana
$week_days = array('lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo');
var_dump($week_days); // muestra el contenido del array
$delete_item = readline("Introduzca el día de la semana a eliminar: ");
$delete_itemIndex = array_search($delete_item, $week_days); //Nos da el indice del array que busquemos
unset($week_days[$delete_itemIndex]); //Elimina la posición del array
$week_daysMod = array_values($week_days);
var_dump($week_daysMod);

//¿Por qué se asigna week_days a week_daysmod?
