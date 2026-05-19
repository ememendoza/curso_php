<?php

class Persona
{
    public int $dpi;
    public string $nombre;
    public int $edad;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        $this->dpi = $dpi;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getDatosPersonales(): string
    {
        return $datos = "
            <h2>Datos Personales</h2>
            DPI: {$this->dpi}<br>
            Nombre: {$this->nombre}<br>
            Edad: {$this->edad}<br>
        ";
    }
}
