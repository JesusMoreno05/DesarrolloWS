<?php
/*
---
title: Ejercicio 3: Datos personales
desc: tablas en php
tags: [basico]
---
*/

$nombre = "Jesús";
$apellido1 = "Moreno";
$apellido2 = "Bernal";
$email = "jmorber2103@g.educaand.es";


echo "<table border='1'>
        <tr>
            <th>Nombre</th>
            <td>$nombre</td>
        </tr>
        <tr>
            <th>Primer Apellido</th>
            <td>$apellido1</td> 
        </tr>
        <tr>
            <th>Segundo Apellido</th>
            <td>$apellido2</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>$email</td>
        </tr>
        
    </table>"
?>