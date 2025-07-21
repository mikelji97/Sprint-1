<?php

$X = array (10, 20, 30, 40, 50,60);

echo count($X) . "<br>";

unset($X[2]);

print_r($X);

$X = array_values($X);

print_r($X);

echo count($X);
?>