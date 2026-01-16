<?php
require_once 'Animal.php';

class Gato extends Animal
{
    public function makesound() : string {
        return "miau, miau";
    }
}
