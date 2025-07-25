<?php
class MagicConstants{

public function tryConstants() : void{                 
    echo __FILE__ . "<br>";       
    echo __DIR__ . "<br>";
    echo __CLASS__ . "<br>";       
    echo __LINE__ . "<br>";
}

}

$ejemplo = new magicConstants();

$ejemplo -> tryConstants();




?>