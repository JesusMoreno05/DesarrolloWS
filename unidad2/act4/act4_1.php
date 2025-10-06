<?php
/*
---
title: Ejercicio 1: Mayor de Tres Números
desc: Mayor de tres números, que estarán almacenados en tres variables de manera aleatoria.
tags: [if, else, basico]
---
*/
$total = 0;
$tabla = array(
'Ana' => 165,
'Luis' => 172,
'Marta' => 158,   
);

echo "<h1>Alturas de personas</h1><br>";
echo "<table border = 1>";
echo "<tr>
            <td>Nombre</td>
            <td>Altura</td>
        </tr>";
$max = 1;
$masAlto = "";
foreach($tabla as $Nombre => $Altura)
{
    if($max< $Altura){
        $max =$Altura;
        $masAlto = $Nombre;
    };
    $total += $Altura;
    echo "<tr>
            <td>$Nombre</td>
            <td>$Altura</td>
        </tr>";
    
}
$media = $total / 3;
$media = floatval($media);
echo "<tr>
            <td>Media Altura</td>
            <td>$media</td>
        </tr>
        
        <tr>
            <td>Más alto</td>
            <td>$masAlto</td>
        </tr>";
echo"</table>";
?>