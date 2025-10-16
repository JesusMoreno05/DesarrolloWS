<?php
/*
---
title: Ejercicio 3: Filtrar mayores que 10
desc: Usa array_filter con una función callback para quedarse solo con los valores > 10; imprime original y filtrado..
tags: [funciones, arrays]
---
*/

$arrayOg = array(1,2,21,31,9,0,82);


function mayores($arrayOg){
    $filtrado = array();
    foreach($arrayOg as $num ){
        if($num > 10){
            array_push($filtrado, $num);
        }
    }
    print_r($filtrado);
}

echo "Array original: ";

print_r($arrayOg);
echo "<br><br>";
echo "Array filtrado: ";
mayores($arrayOg);
?>