<?php
/*
---
title: Ejercicio 7: Tirada de dos dados
desc: Escriba un programa que cada vez que se ejecute muestre la tirada de dos dados al azar y diga si ha salido una pareja de valores iguales o no.
tags: [if]
---
*/

$dado1 = random_int(1,6);
$dado2 = random_int(1,6);
$total = $dado1 + $dado2;

echo "<div>
        <img src="."img/$dado1.svg"." alt="."imgDado"."></img>
        <img src="."img/$dado2.svg"." alt="."imgDado"."></img>
    </div>
    ";
if($dado1 == $dado2 ){
echo "<p>Has sacado pareja de $dado1</p>";
}else{
    echo"<p>No has sacado pareja</p>";
}
?>