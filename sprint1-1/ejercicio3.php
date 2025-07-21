<?php

$X = 5;
$Y = 3;

$N = 4.3;
$M = 5.4;

echo "X = " . $X ."<br>";
echo "Y = " . $Y ."<br>";
echo "N = " . $N . "<br>";
echo "M = " . $M . "<br> <br>";

echo "X + Y = " . $X + $Y . "<br>";
echo "X - Y = " . $X - $Y . "<br>";
echo "X * Y = " . $X * $Y . "<br>";
echo "X % Y = " . $X % $Y . "<br> <br>";

echo "N + M = " . $N + $M . "<br>";
echo "N - M = " . $N - $M . "<br>";
echo "N * M = " . $N * $M . "<br>";
echo "N % M = " . $N % $M . "<br> <br>";



echo "X^2 = " . $X **2 . "<br>";
echo "Y^2 = " . $Y **2 . "<br>";
echo "N^2 = " . $N **2 . "<br>";
echo "M^2 = " . $M **2 . "<br> <br>";

echo "N + M + Y + X = " . $N + $M + $Y + $X . "<br>";

$a = readline("Introduce un número: ");
$b = readline("Introduce otro número: ");   

$operacion = readline("Escoja una operacion (+,-,/,*):");

function calculadora ($a, $b, $operacion) {
    switch ($operacion) {
        case '+':
            return $a+$b;
        case'-':
            return $a-$b;
        case '*':
            return $a*$b;
        case'/':
            return $a/$b;
        default:
            return "opercaion incorrecta";
        }
}

    $resultado = calculadora($a,$b,$operacion);
    
    echo $resultado;
?>