<?php
/*
---
title: Ejercicio 5: Imágenes de Dados
desc: Dados aleatorios
tags: [dados, concatenación, basico]
---
*/

$dado1 = random_int(1,6);
$dado2 = random_int(1,6);
$total = $dado1 + $dado2;

echo "<div>
        <img src="."img/$dado1.svg"." alt="."imgDado"."></img>
        <img src="."img/$dado2.svg"." alt="."imgDado"."></img>
    </div>
    <h1>Total de puntos: $total </h1>
    "


?>