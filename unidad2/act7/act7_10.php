<?php
/*
---
title: Ejercicio 10: Función flecha con cierre (IVA)
desc: Usa una function flecha que captura $iva para calcular el precio final de varios importes.
tags: [función flecha, variables-externas]
---
*/
$final = fn ($precio, $iva) => $precio * (1 + $iva);
$iva = 0.21;

echo "<h2>El iva es del 21%</h2>";
echo "<h2>El precio final es de 100: " . $final(100, $iva) . "</h2>";
echo "<h2>El precio final es de 250: " . $final(250, $iva) . "</h2>";
echo "<h2>El precio final es de 50: " . $final(50, $iva) . "</h2>";

?>