<?php
/*
---
title:  Ejercicio 10: Tirada y Ordenación de Dados
desc: Script PHP que genera entre 2 y 7 dados con valores aleatorios entre 1 y 6, muestra las imágenes correspondientes a cada tirada y luego ordena los dados para mostrarlos nuevamente en orden ascendente.
tags: [foreach, sort, imágenes, arrays]
---
*/

$cantidad = random_int(2,7);
$contador = 1;
$dados = array();

echo"<h1>Tirada de $cantidad dados</h1>";

while($contador <= $cantidad){

    $dado = random_int(1,6);
    array_push($dados, $dado);

    echo "<img src="."img/$dado.svg"." alt="."imgDado"."></img>";
    $contador++;
}

sort($dados);
echo"<br> <h1>Tirada ordenada</h1><br>";
foreach($dados as $img){
    echo "<img src="."img/$img.svg"." alt="."imgDado"."></img>";

}


?>