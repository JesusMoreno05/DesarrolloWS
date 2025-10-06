<?php
/*
---
title: Ejercicio 6: Tabla de multiplicar
desc: Muestra dentro de una tabla HTML la tabla de multiplicar del número que se indique en una variable. Usa un bucle for.
tags: [bucle, while]
---
*/

$tabla = 7;
$multiplcador = 1;
$resultado = 0;

echo"<table border = 1>";
while($multiplcador <= 10){
    $resultado = $multiplcador * $tabla;
    echo"<tr>
        <td>$tabla</td>
        <td>x</td>
        <td>$multiplcador</td>
        <td>=</td>
        <td>$resultado</td>
    </tr>";

    $multiplcador++;
}
echo"</table>";

?>