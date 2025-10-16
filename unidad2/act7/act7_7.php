<?php
/*
---
title: Ejercicio 7: Llamada dinámica a operaciones
desc: Importa las funciones de la librería y las ejecuta dinámicamente por nombre sobre dos números, mostrando cada resultado.
tags: [funciones dinámicas, require _once]
---
*/

$resultado = require_once('act7_6.php');
$num1 = 40;
$num2 = 3;


echo "<h2>Las operaciones se hacen con los números $num1 y $num2<br>
            <ul>
                <li><b>Sumar: ". sumar($num1,$num2). "</b></li>
                <li><b>restar: ". restar($num1,$num2). "</b></li>
                <li><b>multiplicar: ". multiplicar($num1,$num2). "</b></li>
                <li><b>dividir: ". dividir($num1,$num2). "</b></li>

            </ul></h2>";
?>