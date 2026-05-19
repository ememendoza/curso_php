<?php
require_once("ClassPersona.php");

class Cliente extends Persona
{
    protected float $creditos;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito(float $creditos)
    {
        $this->creditos = $creditos;
    }

    public function getCredito(): float
    {
        return $this->creditos;
    }
}
