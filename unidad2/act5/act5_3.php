<?php
/*
---
title:  Ejercicio 3: Participantes Comunes en Dos Actividades
desc: Obtiene las personas que aparecen en ambas listas de inscritos a partir de la intersección de arrays y las muestra.
tags: [array_intersect, foreach]
---
*/

$act1 = array("Ana","Luis","Marta","Pablo");
$act2 = array("Pablo", "Ana", "Lucía");
$ambas = array_intersect($act1, $act2);


echo"<h2>Personas en actividad 1</h2>";
echo"<ul>";
foreach($act1 as $personas1){
    echo"<li>$personas1</li>";

}
echo"</ul>";

echo"<h2>Personas en actividad 2</h2>";
echo"<ul>";
foreach($act2 as $personas2){
    echo"<li>$personas2</li>";

}

echo"</ul>";
echo"<h2>Personas en ambas actividades</h2>";
echo"<ul>";
foreach($ambas as $personas3){
    echo"<li>$personas3</li>";

}
echo"</ul>";


?>