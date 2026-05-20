<?php

abstract class Persona
{
    public int $dpi;
    public string $nombre;
    public int $edad;
    public string $mensaje;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        $this->dpi = $dpi;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    abstract public function getDatosPersonales(): string;
    abstract public function setMensaje(string $mensaje);
    abstract public function getMensaje(): string;
}
