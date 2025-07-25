<?php
session_start();

if (!empty($_GET ['Nombre']) && !empty ($_GET ['Apellido']) && !empty( $_GET ['Edad'])){       //Hago un bucle if con un empty para asegurarme de que los campos que pido no se mandan nulos o con vsalores que no quiero, aparte he añadido un required en el hmtl para que no se mande vacio.//.
$nombre = $_GET ['Nombre'];                                                                   
$apellido = $_GET ['Apellido'];                                                         //recojo los datos del formulario con la variable get y los grabo con la  variable session//
$edad = $_GET ['Edad'];

$_SESSION ['Nombre'] = $nombre; 
$_SESSION ['Apellido'] = $apellido;
$_SESSION ['Edad'] = $edad; 

echo "El usuario ha introducido el nombre :" . ($nombre) . "<br>";                 
echo "El usuario ha introducido el apellido :" . ($apellido) ."<br>";
echo "El usuario ha introducido la edad : ". ($edad) . "<br><br>";

}else{
echo "Los campos introducidos estan vacios.";
}
echo $_SESSION ['Nombre'] . "\n" ;                                           //imprimo los datos que he grabado en la session para comprobar que lo hice correctamente//
echo $_SESSION ['Apellido']. "\n" ; 
echo $_SESSION ['Edad'].  "<br><br>";

?>