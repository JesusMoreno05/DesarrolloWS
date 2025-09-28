<?php
/*
---
title: Ejercicio 5: Imágenes de Dados
desc: Dados aleatorios
tags: [dados, concatenación, basico]
---
*/

$numero = random_int(-10,10) > 0 ? "positivo" : (random_int(-10,10) < 0 ? "negativo" : "0");

echo "<p>El número es $numero</p>";

?>