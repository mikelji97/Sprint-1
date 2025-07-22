<?php
/* Ejercicio 4
Haz un programa que implemente una función en la que se cuente hasta un número determinado.
Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. 
Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…).La cuenta debe mostrarse por pantalla paso a paso. */


function contarSeries(int $numFinal = 10, int $serie = 1) : void {
$i=0;

while ($i <= $numFinal) { 
    echo $i . "\n";
    $i += $serie;
}
}

contarSeries();
contarSeries(24,3);


?>

