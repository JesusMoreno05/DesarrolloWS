<?php  
/*
---
title: Ejercicio 5: Dígito en posición n
desc: Devuelve el dígito que ocupa una posición concreta dentro de un número y lo muestra..
tags: [string, funciones, indices]
---
*/

$num = 34521;
$pos=3;

function buscar($num, $pos){
    $caract = substr($num, $pos-1, 1);
    echo "<h1>En esa posición está: $caract</h1>";
}

echo "<h1>El número es $num y la posicion que pido es la 3</h1>";
buscar($num, $pos);
?>