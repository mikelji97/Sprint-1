<?php

function costoLlamada(int $minutos): int
{
    $precioBase = 10;
    $minutosBase = 3;
    $precioExtra = 5;

    if ($minutos <= $minutosBase) {
        return $precioBase;
    }

    $minutosExtra = $minutos - $minutosBase;
    return $precioBase + ($minutosExtra * $precioExtra);
}


echo "Costo de llamada de 2 minutos: " . costoLlamada(15) . " Centimos "; // Esperado: 10 unidades




















































