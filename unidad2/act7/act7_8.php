<?php
/*
---
title: Ejercicio 8: División con valor por defecto y control de errores
desc: Implementa dividir(num, divisor) con manejo de división por cero.
tags: [parametros-por-defecto, manejo-errores, tipos-dobles, valor por defecto]
---
*/

function dividir($num1,?int $num2){
    if($num2 == null){
      $num2 = 4;  
        $resultado = $num1 / $num2;
    echo "La división de $num1 entre 4 (valor por defecto, porque no he indicado el divisor) es: $resultado";

      
    }else{
        if($num2 == 0){
        echo "La división de $num1 entre 0 es: Error: División por cero";
    } else {
        $resultado = $num1 / $num2;
    echo "La división de $num1 entre $num2 es: $resultado";
    }
}

}

echo dividir(3,4)."<br>";
echo dividir(6,0)."<br>";
echo dividir(3,4)."<br>";
?>