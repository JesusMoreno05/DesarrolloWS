<?php
/*
---
title:  Ejercicio 5: Filtrar Productos por PrecioEjercicio 1: Longitud de comentario (SMS 160)
desc: Mide la longitud del texto y muestra cuántos caracteres faltan o sobran respecto a 160.
tags: [strlen]
---
*/

$str = 'este es el comentario del ejercicio';
echo "<h1>Comentario</h1>
        <p>$str</p>
        <p>Longitud: ";
echo strlen($str);
echo " caracteres</p><p>Te quedan: ";
echo 160-strlen($str) . " caracteres";


?>