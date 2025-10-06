<?php
/*
---
title: Ejercicio 5: Suma de los Números del 1 al 10
desc: Programa que suma los números del 1 al 10, usando un bucle while.
tags: [bucle]
---
*/


$num = 1;
$total = 0;
echo "<h1>Suma de los números del 1 al 10</h1>";

while($num <= 10){
    $total = $total + $num;
    $num++;
}

echo "<p>La suma de los números del 1 al 10 es: $total</p>"




?>