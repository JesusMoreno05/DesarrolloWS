<?php
/*
---
title: Ejercicio 4: Números Pares del 0 al 10
desc: uso del bucle
tags: [for, bucle, basico]
---
*/


echo "<h1>Números pares del 0 al 10</h1>";
echo "<ul>";

for ( $i = 0;$i <= 10; $i++){
    if($i % 2 == 0){
        echo"<li>$i</li>";
    }
}
echo"</ul>"

?>