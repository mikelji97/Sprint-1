<?php
/*Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true
si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”. */

$palabras = array("hola", "Php", "Html");
$caracter = "l";

function charAppearsInEveryWord(array $palabras, string $caracter) : bool {
    for($i=0; $i < count($palabras); $i++){
    if (stripos($palabras[$i],$caracter) === false){
        return false;
    }
    }
    return true;
}
    if (charAppearsInEveryWord($palabras, $caracter)){
        echo "El caracter " . $caracter . " aparece en todas las palabras del array.";
    } else {
        echo "El caracter " . $caracter . " no aparece en todas las palabras del array.";
    }