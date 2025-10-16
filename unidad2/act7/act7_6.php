<?php
/*
---
title: Ejercicio 6: Librería de operaciones básicas
desc: Define funciones para sumar, restar, multiplicar y dividir enteros (con intdiv en la división).
tags: [funciones, aritmetica, php]
---
*/

function sumar($num1,$num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

function restar($num1,$num2){
    $resultado = $num1 - $num2;
    return $resultado;
}

function multiplicar($num1,$num2){
    $resultado = $num1 * $num2;
    return $resultado;
}

function dividir($num1,$num2){
    if($num2 == 0){
        return "No se puede dividir entre 0";
    } else {
        $resultado = $num1 / $num2;
        return $resultado;
    }
}
?>