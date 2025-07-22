<?php
require_once 'class/Animal.php';
require_once 'class/Sonido.php';

class Perro extends Animal implements Sonido {
     public function makesound(){
     return "bup,bup";
  }
}

?>