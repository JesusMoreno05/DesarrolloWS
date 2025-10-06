<?php
/*
---
title: Ejercicio 3: Número en Castellano
desc: Uso del operador match para convertir un número en su representación en castellano.
tags: [match]
---
*/
$num = random_int(0,10);
$caste = match($num) {
    0 => "cero",
    1 => "uno",
    2 => "dos",
    3 => "tres",
    4 => "cuatro",
    5 => "cinco",
    6 => "seis",
    7 => "siete",
    8 => "ocho",
    9 => "nueve",
    10 => "diez",
    default => "ingresa un numero entre el 0 y el 10"
};
echo "<h1>el número generado es $num y en castellano es: $caste";

?>