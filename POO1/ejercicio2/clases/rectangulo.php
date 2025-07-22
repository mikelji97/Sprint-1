<?php

require_once 'clases/shape.php';

class rectangulo extends shape{
    public function area(){
        return ($this ->ancho * $this ->alto) /2;
    }
    }