<?php
/*
---
title: Ejercicio 2: Números
desc: Media aritmética de dos numeros
tags: [operadores, basico]
---
*/

$num1 = random_int(0,100);
$num2 = random_int(0,100);
$media = ($num1 + $num2) / 2;

echo "<div>
        <h1 style="."color:orange;".">la media aritmética de $num1 y $num2 es $media</h1>
    </div>"
?>