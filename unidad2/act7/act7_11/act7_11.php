<?php
/*
---
title: Ejercicio 11: Cartas
desc: Generar cartas aleatorias.
tags: [funciones, concatenar, imagenes]
---
*/

function tuMano($random){
    $cantidad = 1;
    while($cantidad <= $random){

    $carta = random_int(1,13);
    $palos = array("t", "p", "d", "c");
    $paloAleatoio = array_rand($palos);
    $palo = $palos[$paloAleatoio];

    echo "<img src='cartas/$palo$carta.svg' alt='imgDado' style='width: 100px; height: 200px;'></img>";
    $cantidad++;
}
}

$num= random_int(1,10);
echo "<h2>$num cartas:</h2>";
tuMano($num);
?>