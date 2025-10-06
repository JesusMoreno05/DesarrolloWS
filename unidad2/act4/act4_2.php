<?php
/*
---
title: Ejercicio 1: Mayor de Tres Números
desc: Mayor de tres números, que estarán almacenados en tres variables de manera aleatoria.
tags: [if, else, basico]
---
*/

$tabla = array('Fede' => [193, "fede@correo.com"], 
                'Ana' => [ 165, "ana@correo.com"],
                'Luis' => [ 172,"luis@correo.com"]);

    echo"<h1>Listado de personas</h1>";
    echo "<table border = 1>";
    echo "<tr>
            <td>Nombre</td>
            <td>Altura</td>
            <td>Email</td>
        </tr>";

foreach($tabla as $Nombre => [$altura, $email]){
echo "<tr>
            <td>$Nombre</td>
            <td>$altura</td>
            <td>$email</td>
        </tr>";

}
    echo"</table>"
?>