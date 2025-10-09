<?php
/*
---
title: Ejercicio 3: Conteo de Sexo Aleatorio
desc: Script PHP que genera aleatoriamente el sexo (M o F) de 5 personas, los muestra en una tabla numerada y cuenta cuántos hombres y mujeres hay utilizando un array contador.
tags: [rand, foreach, array, contador]
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