<?php
/*
---
title:  Ejercicio 2: Empleados Activos en Tabla
desc: Filtra un listado de empleados para mostrar solo los que están en estado activo dentro de una tabla HTML.
tags: [array_filter, foreach, html-table]
---
*/

$gente = array("Ana" => ["Ventas","activo"], "Luis" => ["TI","inactivo"], "Marta" => ["Marketing", "activo"]);

echo"<h1>Empleados</h1> <table border=1>";

    echo"<tr>
            <td><b>Nombre<b></td>
            <td><b>Departamento<b></td>
            <td><b>Estado<b></td>
        </tr>";


foreach($gente as $nombre => [$dep, $estado]){

    echo"<tr>
            <td>$nombre</td>
            <td>$dep</td>
            <td>$estado</td>
        </tr>";
}

echo"</table><h1>Empleados activos</h1> <table border=1>";

    echo"<tr>
            <td><b>Nombre<b></td>
            <td><b>Departamento<b></td>
            <td><b>Estado<b></td>
        </tr>";

foreach($gente as $emple => [$depa, $activo]){

    if($activo == "activo"){
    echo"<tr>
            <td>$emple</td>
            <td>$depa</td>
            <td>$activo</td>
        </tr>";
    }
    
    
}
?>