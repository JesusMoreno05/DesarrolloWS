<?php
/*
---
title: Ejercicio 9: Contador por referencia
desc: Incrementa un contador de visitas pasando el parámetro por referencia y muestra el total.
tags: [paso por referencia, funciones, incremento]
---
*/
function aumentarVisitas(float &$visitas){
    $visitas++;
    return $visitas;
}

$visitas = 0;
aumentarVisitas($visitas);
echo "<h2>El numero de visitas es: $visitas</h2>";
?>