<?php
/*
---
title: Ejercicio 7: Números Pares e Impares con Colores
desc: Script PHP que genera 10 números aleatorios entre 1 y 100 y los muestra en una tabla. Los números pares se muestran en azul y los impares en rojo utilizando estilos en línea.
tags: [rand, foreach, if, estilos, colores]
---
*/

$numeros = array();

for ($i = 0; $i<=100; $i++){
array_push($numeros, $i);};

$tochaco = array_rand($numeros, 10);

echo"<table border=1>
        <tr>";

foreach($tochaco as $num){
    if($num % 2 === 0){
        printf("<td style = 'color:red;'>$num</td>");
    }else{
        printf("<td style = 'color:blue;'>$num</td>");
    }
};
echo"</tr>";
?>