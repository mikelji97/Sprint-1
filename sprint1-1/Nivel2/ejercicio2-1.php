<?php


function totalToPay (int $call) {
    
    if ($call <=3){
        $call = 10;
        return "La llamada realizada tiene un coste de " . $call . " centimos.";

    }else if ($call >3){
            $resultado = 10;
        for ($i=3; $i <= $call; $i++ ){
            $resultado += 5;
        }
        return "La llamada realizada tiene un coste de " . $resultado . " centimos.";

    }
}
    echo totalToPay(15);
