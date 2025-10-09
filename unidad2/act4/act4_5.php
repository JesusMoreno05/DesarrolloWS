<?php
/*
---
title:  Ejercicio 5: Cálculo de Precios con IVA
desc: Script PHP que muestra una tabla de productos con su precio sin IVA, tipo de IVA aplicado y precio final con IVA. Utiliza arrays para almacenar productos y tipos de IVA, y un bucle foreach para generar las filas de la tabla.
tags: [array bidimensional, foreach, number_format]
---
*/

$producto = array("Pan" => [1.20 , 1 => 0],
                    "Leche" => [0.95, 2 => 0.04],
                    "Libro" => [12.00, 3 => 0.1],
                    "TV" => [300.00, 4 => 0.21],
                    "Zapatos" => [50.00, 4 => 0.21],);
$media = 0;


echo "<table border =1>
        <tr>
            <td>Producto</td>
            <td>Sin Iva</td>
            <td>Tipo</td>
            <td>Con IVA</td>
        </tr>";

foreach($producto as $nombre => [$precio , $tipo => $iva]){
$media = $precio * ($iva + 1);

echo "<tr>
            <td>$nombre</td>
            <td>$precio</td>
            <td>$tipo</td>
            <td>$media</td>
        </tr>";
}

?>