<?php
/*
---
title: Ejercicio 4: Media de Números Aleatorios
desc: Script PHP que genera tres números aleatorios entre 0 y 100, calcula su media y muestra el resultado en pantalla utilizando printf.
tags: [range, array_rand, variables, printf]
---
*/

$tochaco = array();
for($i = 1 ; $i <= 100 ;$i++)
array_push($tochaco, random_int(1,1000));

$num1 = random_int(0, $tochaco[random_int(0,100)]);
$num2 = random_int(0, $tochaco[random_int(0,100)]);
$num3 = random_int(0, $tochaco[random_int(0,100)]);

$media = ($num1 + $num2 + $num3)/3; 
printf("<h1>La media de $num1 , $num2, $num3 es %.2f</h1>",$media);

?>