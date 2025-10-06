<?php
/*
---
title: Ejercicio 8: Tirada de entre 1 y 5 dados
desc: Escriba un programa que cada vez que se ejecute muestre la tirada de entre 1 y 5 dados al azar y diga el valor mínimo.
tags: [bucle, while, if]
---
*/


$cantidad = random_int(1,5);
$contador = 1;


echo"<h1>$cantidad dados</h1>";

while($contador <= $cantidad){

    $dado = random_int(1,6);

    echo "<div>
        <img src="."img/$dado1.svg"." alt="."imgDado"."></img>";
}
echo"
?>