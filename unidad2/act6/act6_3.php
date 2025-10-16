<?php
/*
---
title: Ejercicio 3: Resaltar coincidencias en un texto
desc: Busca un término en el texto con strpos y lo rodea con <mark> usando substr para reconstruir..
tags: [strpos, substr]
---
*/

$textoOriginal = 'PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.';
$termino = 'PHP';
$longitudTermino = strlen($termino);

$texto = $textoOriginal;
$pos = 0;
$resultado = "";

echo "<p><b>Texto:</b> $textoOriginal</p>";
echo "<p><b>Termino:</b> $termino</p>";


while (($encontrado = strpos($texto, $termino, $pos)) !== false) {

    $resultado .= substr($texto, $pos, $encontrado - $pos);
    $resultado .= "<mark>" . substr($texto, $encontrado, $longitudTermino) . "</mark>";
    $pos = $encontrado + $longitudTermino;
}

$resultado .= substr($texto, $pos);

echo $resultado;


?>