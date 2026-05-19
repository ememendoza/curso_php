<?php

class Operacion
{
    public int $cantidadUno = 0;
    public int $cantidadDos = 0;
    public int $resultado = 0;

    function __construct(int $cantidadUno, int $cantidadDos)
    {
        $this->cantidadUno = $cantidadUno;
        $this->cantidadDos = $cantidadDos;
    }

    public function getSuma()
    {
        $this->resultado = $this->cantidadUno + $this->cantidadDos;
        return $this->resultado;
    }

    public function getResta()
    {
        $this->resultado = $this->cantidadUno - $this->cantidadDos;
        return $this->resultado;
    }

    public function getMultiplicacion()
    {
        $this->resultado = $this->cantidadUno * $this->cantidadDos;
        return $this->resultado;
    }

    public function getDivision()
    {
        $this->resultado = $this->cantidadUno / $this->cantidadDos;
        return $this->resultado;
    }
}
