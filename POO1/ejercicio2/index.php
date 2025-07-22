<?php
require_once 'clases/shape.php';
require_once 'clases/rectangulo.php';
require_once 'clases/triangulo.php'; 

$rectangulo1 = new rectangulo(5, 10);
$triangulo1 = new triangulo(5, 10);
$rectangulo2 = new rectangulo(10,13);


echo "El área del rectángulo es: " . $rectangulo1->area() . "<br>";
echo "El área del triángulo es: " . $triangulo1->area()   . "<br>";
echo "El area del segundo rectangulo es: " . $rectangulo2->area() . "<br>";
?>