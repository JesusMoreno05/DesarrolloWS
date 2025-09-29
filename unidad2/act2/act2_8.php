<?php
/*
---
title: Ejercicio 8: Tienda online
desc: Uso de la nave espacial
tags: [basico]
---
*/


$precio1 = 30;   
$precio2 = 30;
$mensaje = $precio1 <=> $precio2;

if ($mensaje === -1) {
    echo "<p>El producto 1 es más barato</p>";
} elseif ($mensaje === 1) {
    echo "<p>El producto 1 es más caro</p>";
} elseif ($mensaje === 0) {
    echo "<p>Ambos productos cuestan lo mismo</p>";
}


?>