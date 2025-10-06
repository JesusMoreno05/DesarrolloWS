<?php
/*
---
title: Ejercicio 1: Mayor de Tres Números
desc: Mayor de tres números, que estarán almacenados en tres variables de manera aleatoria.
tags: [if, else, basico]
---
*/

$num1 = random_int(1,100);
$num2 = random_int(1,100);
$num3 = random_int(1,100);

echo "<h1>Juego: Mayor de tres</h1>
    <ul>
        <li>Número 1: $num1</li>
        <li>Número 1: $num2</li>
        <li>Número 1: $num3</li>
    </ul>";

if ($num1 > $num2 && $num1 > $num3):
    echo "El número mayor es: $num1";
    elseif ($num2 > $num3):
        echo "El número mayor es: $num2";
    else:
        echo "El número mayor es: $num3";
endif;
?>