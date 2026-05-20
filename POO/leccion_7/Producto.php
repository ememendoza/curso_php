<?php

namespace Traits;

require_once('HerramientasTexto.php');

class Producto
{
    use HerramientasTexto;

    public string $nombre;

    function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getUrl(): string
    {
        return "https://store.eme.com/products/" . $this->generarSlug($this->nombre);
    }
}
