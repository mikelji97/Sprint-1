<?php

function costoLlamada(int $minutos): int
{
    $precioBase = 10;
    $minutosBase = 3;
    $precioExtra = 5;
    $minutosExtra = $minutos - $minutosBase;
    $costoExtra = $minutosExtra * $precioExtra;

    if ($minutos <= $minutosBase) {
        return $precioBase;
    } else {
        return $precioBase + $costoExtra;
    }
}


echo "El coste de la llamada es: " . costoLlamada(25) . " centimos.";
