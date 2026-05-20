<?php
require_once("Persona.php");

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

    public function getDatosPersonales(): string
    {
        return "
            <h2>Datos Personales</h2>
            DPI: {$this->dpi}<br>
            Nombre: {$this->nombre}<br>
            Edad: {$this->edad}<br>
            Puesto: {$this->puesto}<br>
        ";
    }

    public function setMensaje(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function getMensaje(): string
    {
        return $this->mensaje . '' . $this->nombre . '<br>';
    }
}
