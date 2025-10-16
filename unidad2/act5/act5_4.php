<?php
/*
---
title:  Ejercicio 4: Validación de Formulario — Campos Faltantes
desc: Compara los campos obligatorios de un formulario con los datos enviados por el usuario y lista los que faltan.
tags: [array_diff_key, forms, validation, foreach]
---
*/

$campos = array("nombre", "email", "edad", "telefono");
$usu1 = array("nombre"=> "Ana", "edad" => 25);
$falta = array_diff($campos , array_keys($usu1));

echo"<h1>Validación de formulario</h1>
    <h2>Campos obligatorios</h2>
    <table border = 1>
    <tr>
        <td><b>Campo</b></td>
    </tr>";

foreach($campos as $datos){
    echo"<tr>
            <td>$datos</td>
        </tr>";
}

echo"</table><h2>Campos enviados por el usuario</h2>
    <table border = 1>
    <tr>
        <td><b>Campo</b></td>
        <td><b>Valor</b></td>
    </tr>";

foreach($usu1 as $datos => $credenciales){
    echo"<tr>
            <td>$datos</td>
            <td>$credenciales</td>
        </tr>";
}

echo"</table><h2>Campos faltantes</h2>";

foreach($falta as $faltan){
    echo"<ul>
            <li color = red>$faltan</li>
        </ul>";
}
?>