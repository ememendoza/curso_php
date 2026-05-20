<?php

namespace Traits;

trait HerramientasTexto
{
    public function generarSlug(string $texto): string
    {
        return strtolower(str_replace(' ', '_', $texto));
    }
}
