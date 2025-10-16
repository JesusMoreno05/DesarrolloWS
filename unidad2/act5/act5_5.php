<?php
/*
---
title:  Ejercicio 5: Filtrar Productos por Precio
desc: Muestra solo los productos cuyo precio supera un umbral (p. ej., 20 €) y los presenta en una tabla HTML.
tags: [array_filter, foreach]
---
*/

$lista = array("Camiseta" => "15.00",
                "Pantalón" => "35.00",
                "Zapatos" => "50.00",
                "Gorra" => "10.00",);

function taCaro($precio){
    return $precio > 20;
};


$caro = array_filter($lista, "taCaro");

echo"<h1>Lista completa de productos</h1>
    <table border = 1>
        <tr>
            <td><b>Producto</b></td>
            <td><b>Precio (€)</b></td>
        </tr>";

foreach($lista as $producto => $precio){
    echo"<tr>
            <td>$producto</td>
            <td>$precio</td>
        </tr>";
}

echo"</table><h1>Productos con precio superior a 20 €</h1>
    <table border = 1>
        <tr>
            <td><b>Producto</b></td>
            <td><b>Precio (€)</b></td>
        </tr>";

foreach($caro as $producto => $precio){
    echo"<tr>
            <td>$producto</td>
            <td>$precio</td>
        </tr>";
}
?>