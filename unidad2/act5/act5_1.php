<?php
/*
---
title:  Ejercicio 1: Catálogo Unificado de Productos
desc: Une dos listas de productos de distintos proveedores, elimina duplicados, ordena alfabéticamente y muestra el resultado.
tags: [array_merge, array_unique, sort, foreach]
---
*/

$pro1 = array("Camiseta", "Pantalón", "Zapatos",);
$pro2 = array("Bufanda", "Camiseta", "Gorra");
$pro3 = array();

$pro3 = array_merge($pro1, $pro2);
$pro3 =array_unique($pro3);
sort($pro3);

echo "<h1>Proveedor 1</h1><ul>";
foreach($pro1 as $lis1){
    echo "<li>$lis1</li>";
}
echo"</ul>";

echo "<h1>Proveedor 2</h1><ul>";
foreach($pro2 as $lis2){
    echo "<li>$lis2</li>";
}
echo"</ul>";

echo "<h1>Proveedor 3</h1><ul>";
foreach($pro3 as $lis3){
    echo "<li>$lis3</li>";
}
echo"</ul>";

?>