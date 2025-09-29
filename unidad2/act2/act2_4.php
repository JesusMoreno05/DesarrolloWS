<?php
/*
---
title: Ejercicio 4: Cliente VIP
desc: comparar el saldo e ingreso de un cliente y clasificarlo
tags: [dados, concatenación, basico]
---
*/

$saldo = "1000";
(int)$saldo;
$ingreso = 250; 
$cliente = $saldo + $ingreso> 1200 ? "Cliente VIP": "Cliente normal";

echo "<p>El cliente es $cliente</p>";


?>