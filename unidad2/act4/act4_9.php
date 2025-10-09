<?php
/*
---
title:  Ejercicio 9: Búsqueda de Emoji en un Grupo
desc: Script PHP que genera entre 5 y 10 emojis aleatorios, los muestra en un grupo y luego selecciona un emoji adicional al azar para comprobar si está dentro del grupo.
tags: [foreach, in_array, Unicode]
---
*/

$caja = array();
$cantidad = random_int(5,10);


for($y = 0; $y < $cantidad; $y++){
    $caja[] = "&#". rand(128512,128580);
};

echo"<h1>Grupo: ";

foreach($caja as $emoji){
    echo"$emoji";
}

$emojiDentro = "&#". rand(128512,128580);

echo"<br><br>Elegido: $emojiDentro";


    if (in_array($emojiDentro, $caja)) {
            echo "<br>Sí está en el grupo";
        } else {
            echo "<br>No está en el grupo";
        }

?>