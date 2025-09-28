<?php 
/*
---
title: Ejercicio 1: Operadores de comparación
desc: Comparaciones con diferentes tipos de datos
tags: [basico]
---
*/


$a=1;

$primero = var_dump("2" == $a);
$segundo = var_dump($a == false);
$tercero = var_dump($a == 2);
$cuarto = var_dump(--$a == false);

echo "<p>$primero</p> <p>$segundo</p> <p>$tercero</p> <p>$cuarto</p>";

?>