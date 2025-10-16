<?php
/*
---
title: Ejercicio 4: Partes de un email y enmascarado del usuario
desc: Separa usuario y dominio con strpos+substr; enmascara el usuario dejando visible primera y última letra..
tags: [strpos, substr, for, strlen]
---
*/

$mail = "jmorber2103@g.educaand.es";
$usuario = substr($mail, 0, strpos($mail, "@", 0));

$usuLen = "";   
for($i=0 ; $i <= strlen($usuario) -3; $i++){
    $usuLen = $usuLen . "*";
};
$dominio = substr($mail, strpos($mail, "@", 0) +1);
$enmascarado = substr($usuario, 0,1 ) . $usuLen . substr($usuario, -1,1 );
echo "<p><b>Email: </b>$mail</p>";
echo "<p><b>Usuario: </b>$usuario</p>" ;
echo "<p><b>Dominio: </b>$dominio</p>" ;
echo "<p><b>Dominio: </b>$enmascarado   </p>" ;
?>