<?php
/*
---
title: Ejercicio 6: Rotación de un Array
desc: Script PHP que genera un array de 10 números aleatorios entre 1 y 100, guarda una copia del original y luego rota el array moviendo el último elemento a la primera posición. Finalmente muestra ambos arrays.
tags: [array_pop, array_unshift, arrays]
---
*/


$tochaco = array();
for($i = 1 ; $i <= 10 ;$i++)
array_push($tochaco, random_int(0,100));

echo"<h1>Original: ";
foreach($tochaco as $num){

echo "$num, " ;
}
echo"</h1>";

$vuelta = array_pop($tochaco);
array_unshift($tochaco, $vuelta);

echo"<h1>Vuelta: ";
foreach($tochaco as $num){

echo "$num, " ;
}
echo"</h1>";
?>