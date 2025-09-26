<?php

class CandyShop
{

    public function candys(int $chocolates, int $chicles, int $caramelos): int
    {
        return ($chocolates * 1) + ($chicles * 0.5) + ($caramelos * 1.5);
    }
}

$pedido = new CandyShop();

echo "El total de la compra ha sido: " . $pedido->candys(2,8,6) . " euros.";