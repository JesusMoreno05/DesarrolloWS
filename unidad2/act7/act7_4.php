<?php
/*
---
title: Ejercicio 4: Máximo con parámetros variables
desc: Implementa una función que devuelve el mayor de una lista de números..
tags: [parametros variables, funciones]
---
*/

function mayor($array){
    $mayor = $array[0];
    foreach($array as $num){
        if($num > $mayor){
            $mayor = $num;
        }
    }
    echo"El número mayor es: $mayor";
}

$array = array(2,3,24,1);
print_r($array) ;
mayor($array);
?>