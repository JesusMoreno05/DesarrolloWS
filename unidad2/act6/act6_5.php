<?php
/*
---
title: Ejercicio 5: Extraer nombre de fichero
desc: Divide la ruta por '/' y devuelve el último segmento no vacío (el nombre del fichero).
tags: [explode]
---
*/

$dominio = "http://www.linkfred.com/carpeta1/index.php";
$partes = explode("/", $dominio);
$fichero = count($partes)-1;

echo "<p><b>URL: </b>$dominio</p> 
        <p>$partes[$fichero]</p>"
?>