<?php

require_once 'class/Animal.php';
require_once 'class/Sonido.php';

class Gato extends Animal implements Sonido
{
    public function makesound() :void{
        echo "miau, miau";
    }
}
