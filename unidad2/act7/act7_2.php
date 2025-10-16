<?php
/*
---
title: Ejercicio 2: Array aleatorio (rango y tamaño)
desc: Genera un array de tamaño dado con enteros aleatorios entre un mínimo y un máximo y lo muestra..
tags: [funciones, , arrays, aleatorio]
---
*/

function arrayRandom($a){
    for($i=1; $i <=5 ; $i++){
        $num = rand(1,10);
        array_push($a, $num);
    }
    print_r($a);
};

$a = array();
arrayRandom($a);

?>