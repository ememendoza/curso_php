<?php
require_once("Persona.php");

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

    public function getDatosPersonales(): string
    {
        return "
            <h2>Datos Personales</h2>
            DPI: {$this->dpi}<br>
            Nombre: {$this->nombre}<br>
            Edad: {$this->edad}<br>
            Creditos: {$this->creditos}<br>
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
