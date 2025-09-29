<?php
/*
---
title: Ejercicio 6: transformar variables
desc: uso de operadores modificadores de tipo
tags: [basico]
---
*/

$host = "localhost";
$puerto = "3306";
$usuario = "root";
$clave = null;
$debug = "true";

print_r($host);
print_r($puerto);
print_r($usuario);
print_r($clave);
print_r($debug);

echo "<br>";
echo "<br>";


var_dump($host);
var_dump($puerto);
var_dump($usuario);
var_dump($clave);
var_dump($debug);

settype($puerto, "integer");
settype($debug, "boolean");
if ($clave === null) {
    echo $clave ?? "";
}

echo "<br>";
echo "<br>";


var_dump($host);
var_dump($puerto);
var_dump($usuario);
var_dump($clave);
var_dump($debug);

?>