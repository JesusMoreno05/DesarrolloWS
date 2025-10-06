<?php
/*
---
title: Ejercicio 2: Calificación Aleatoria
desc: Script PHP que genera un número aleatorio entre 1 y 10, simulando una nota numérica.
tags: [if, else]
---
*/

$num1 = random_int(0,10);
$nota = "";

echo "<h1>Simulación de Calificación</h1>";
echo "<p>tu nota es: $num1</p>";

if ($num1 >= 0 && 5 > $num1){
    $nota = "Insuficiente";
}elseif($num1 >= 5 && 6 > $num1){
    $nota = "Suficiente";
}elseif($num1 >= 6 && 7 > $num1){
    $nota = "Bien";
}elseif($num1 >= 7 && 9 > $num1){
    $nota = "Notable";
}elseif($num1 >= 9){
    $nota = "Sobresaliente";
}

echo "<h2>Calificación: $nota</h2>"
?>