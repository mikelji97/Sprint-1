<?php
class shape{
    protected $ancho;
    protected $alto;  
    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
}
class triangulo extends shape{
    public function area(){
        return ($this ->ancho * $this ->alto) /2;
    }
}
class rectangulo extends shape{
    public function area(){
        return ($this ->ancho * $this ->alto) /2;
    }
    }