<?php
/*
---
title: Ejercicio 1: Mayor de Tres Números
desc: Mayor de tres números, que estarán almacenados en tres variables de manera aleatoria.
tags: [if, else, basico]
---
*/

$personas = array("M","M","M","F","M",);
$contador = 0;

$sexos = array_count_values($personas);
echo"<h1>Personas</h1>";
echo"<table border=1>";
for($i= 1; $i <= count($personas); $i++){
    echo"<tr>
            <td>$i</td>
            <td>$personas[$contador]</td>
        </tr>";
        $contador++;
}
echo"</table> <br>";
print_r($sexos);

?>