<?php
/*
---
title:  Ejercicio 2: Partes del nombre e iniciales (soporta nombre compuesto)
desc: Toma los dos últimos tokens como apellidos y el resto como nombre; también calcula las iniciales.
tags: [explode, implode, substr]
---
*/

$nombre = "Jesús Moreno Bernal";
$datos = explode(" ", $nombre);

echo "<p><b>Nombre completo:</b> $nombre</p>";
echo "<p><b>Nombre:</b> $datos[0]</p>";
echo "<p><b>Primer apellido:</b> $datos[1]</p>";
echo "<p><b>Segundo apellido:</b> $datos[2]</p>";
echo "<p><b>Siglas: </b>". substr($datos[0], 0, 1). substr($datos[1], 0, 1). substr($datos[2], 0, 1) ."</p>";


?>