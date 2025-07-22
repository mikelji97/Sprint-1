<?php
require_once 'clases/shape.php';

class triangulo extends shape{
    public function area(){
        return ($this ->ancho * $this ->alto) /2;
    }
}
