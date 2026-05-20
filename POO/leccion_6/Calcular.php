<?php

namespace Interfaces;

interface Calcular
{
    public function raizCuadrada(float $numero): float;
    public function potencia(int $numero, int $potencia): int;
}
