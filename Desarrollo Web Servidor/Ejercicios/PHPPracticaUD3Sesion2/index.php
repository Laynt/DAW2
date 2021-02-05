<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $myArray = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes',
                  'Sábado', 'Domingo');
        echo 'Escriba el día de la semana que quiere eliminar';
        car_dump($myArray); 
        $delete_item = readLine('Introduce el dia de la semana a eliminar');
        $delete_itemIndex = array_search($delete_item, $myArray);

        ?>
    </body>
</html>
