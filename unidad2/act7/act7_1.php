<?php
/*
---
title: Ejercicio 1: Par o impar con función
desc: Determina si un número es par usando una función y operador ternario; muestra el resultado..
tags: [modulo, funciones, ternario]
---
*/

$num = 6;
function par($num){
    if($num % 2 == 0){
        echo "El numero $num es par";
    } elseif($num % 2 !== 0) {
        echo "El numero $num es impar";
    }else{
        echo "Porfa ingresa un numero";
    }
}

$frase = par($num);
echo $frase;
?>