<?php

require_once 'class/Animal.php';
require_once 'class/Perro.php';
require_once 'class/Gato.php';
require_once 'class/Sonido.php';


$gato = new Gato("loko");
$perro = new Perro("doby");      

echo "El perro hace " . $perro->makesound() . "<br>";
echo "El gato hace " . $gato->makesound() . "<br>";






?>