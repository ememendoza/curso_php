<?php

namespace Traits;

require_once("HerramientasTexto.php");

class EntradaBlog
{
    use HerramientasTexto;

    public string $titulo;

    function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getPostUrl(): string
    {
        return "https://blog.eme.com/title/" . $this->generarSlug($this->titulo);
    }
}
