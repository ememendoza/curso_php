<?php

class Usuario
{
    public string $nombre;
    public string $email;
    public string $tipo;
    private string $clave;
    protected string $fechaRegistro;
    static $estado = "Active";

    function __construct(string $nombre, string $email, string $tipo)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->tipo = $tipo;
        $this->clave = rand();
        $this->fechaRegistro = date('Y-m-d H:i:s');
    }

    public function getClave(): string
    {
        return $this->clave;
    }

    public function setClave(string $clave)
    {
        $this->clave = $clave;
    }

    public function getFechaRegistro(): string
    {
        return $this->fechaRegistro;
    }

    public function registrarse() {}

    public function verPerfil()
    {
        print("Nombre: " . $this->nombre . "<br>");
        print("Email: " . $this->email . "<br>");
        print("Tipo: " . $this->tipo . "<br>");
        print("Clave: " . $this->clave . "<br>");
        print("Fecha de registro: " . $this->fechaRegistro . "<br>");
        print("Estado: " . self::$estado . "<br>");
    }

    public function cambiarClave() {}
}
