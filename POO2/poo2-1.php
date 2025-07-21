<?php

class animal {
    protected $nombre;
  
    function __construct($nombre){
     $this -> nombre = $nombre;
    }
    }
class perro extends animal{
     public function makesound(){
     return "bup,bup";
  }
}

class gato extends animal {
     public function makesound(){
     return "Mi!";
 }
}  

?>