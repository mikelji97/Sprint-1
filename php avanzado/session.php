<?php
session_start();

if (!empty($_GET ['Nombre']) && !empty ($_GET ['Apellido']) && !empty( $_GET ['Edad'])){
$nombre = $_GET ['Nombre'];
$apellido = $_GET ['Apellido'];
$edad = $_GET ['Edad'];

echo "El usuario ha introducido el nombre :" . $nombre . "<br>";
echo "El usuario ha introducido el apellido :" . $apellido ."<br>";
echo "El usuario ha introducido la edad : ". $edad . "<br>";

}else{
echo "Los campos introducidos estan vacios.";
}

$_SESSION ['Nombre'] = $nombre; 
$_SESSION ['Apellido'] = $apellido;
$_SESSION ['Edad'] = $edad; 

echo $_SESSION ['Nombre'] . "\n" ; 
echo $_SESSION ['Apellido']. "\n" ; 
echo $_SESSION ['Edad'].  "<br>";

echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
?>