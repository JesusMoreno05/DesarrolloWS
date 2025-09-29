<?php
/*
---
title: Ejercicio 3: uso del operador ternario
desc: comparaciones con el operador ternario
tags: [dados, concatenación, basico]
---
*/

$numero = random_int(-10,10) > 0 ? "positivo" : (random_int(-10,10) < 0 ? "negativo" : "0");

echo "<p>El número es $numero</p>";

?>