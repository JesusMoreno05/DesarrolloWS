<?php
/*
---
title: Ejercicio 5: Imágenes de Dados
desc: Dados aleatorios
tags: [dados, concatenación, basico]
---
*/

$saldo = "1000";
(int)$saldo;
$ingreso = 250; 
$cliente = $saldo + $ingreso> 1200 ? "Cliente VIP": "Cliente normal";

echo "<p>El cliente es $cliente</p>";


?>