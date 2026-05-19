<?php
require_once("ClassPersona.php");

class Empleado extends Persona
{
    protected string $puesto;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi, $nombre, $edad);
    }

    public function setPuesto(string $puesto)
    {
        $this->puesto = $puesto;
    }

    public function getPuesto(): string
    {
        return $this->puesto;
    }
}
