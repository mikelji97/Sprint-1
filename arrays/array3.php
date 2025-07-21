<?php
/*Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true
si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”. */

$palabras = array("hola", "Php", "Html");
$caracter = "h";

function comprobar($palabras, $caracter){
    for($i=0; $i < count($palabras); $i++){
    if (stripos($palabras[$i],$caracter) === false){
        return false;
    }
    }
    return true;
}
    if (comprobar($palabras, $caracter)){
        echo "True";
    } else {
        echo "False";
    }