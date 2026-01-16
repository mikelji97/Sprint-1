<?php

require_once 'class/Animal.php';
require_once 'class/Perro.php';
require_once 'class/Gato.php';



$gato = new Gato("loko");
$perro = new Perro("doby");      


echo "El gato hace : " . $gato->makesound() . PHP_EOL;
echo "El perro hace : " . $perro->makesound() . PHP_EOL;

?>