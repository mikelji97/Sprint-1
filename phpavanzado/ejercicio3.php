<?php

class Ejercicio3{
    private string $nombre;
    private string $apellido;
    private int $edad;

    function __construct(string $nombre, string $apellido, int $edad) {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;

    }

    public function __toString() {
        return "Nombre : " . $this -> nombre . "<br> Apellido : " . $this -> apellido . "<br> Edad: " . $this -> edad;
        

    }
}
    $ejemplo = new Ejercicio3("Mikel","Jimenez",28);

    echo $ejemplo;


?>
