<?php
/*
---
title: Ejercicio 8: Bolas Aleatorias y Eliminación de Duplicados
desc: Script PHP que genera entre 5 y 15 bolas aleatorias representadas por códigos Unicode, las muestra en pantalla y luego elimina duplicados, indicando cuántas bolas distintas hay.
tags: [rand, foreach, if, estilos, colores]
---
*/

$caja = array();
$cantidad = random_int(5,15);
for($y = 0; $y < $cantidad; $y++){
    $caja[] = "&#". rand(10102,10111);
}

echo"<h1>entre estas $cantidad bolas ... <br>";


foreach($caja as $bola){
    echo"$bola";
}

$salida = array_unique($caja);
$numdif = count($salida) ;
echo"<h1>... hay $numdif bolas distintas <br>";

foreach($salida as $diferente){
    echo"$diferente";
}
?>