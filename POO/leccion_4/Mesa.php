<?php

require_once('Mueble.php');

class Mesa extends Mueble
{
    private string $forma;
    protected string $tamanio;

    public function __construct(string $descripcion, float $precio, string $color, string $material, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $color, $material);
        $this->tamanio = $tamanio;
    }

    public function getInformacionProducto()
    {
        $productos = array(
            'producto' => $this->descripcion,
            'precio' => $this->precio,
            'stock_minimo' => $this->stockMinimo,
            'estado' => $this->estado,
            'color' => $this->color,
            'material' => $this->material,
            'forma' => $this->forma,
            'tamanio' => $this->tamanio,
        );
        return $productos;
    }

    public function getForma(): string
    {
        return $this->forma;
    }
    public function setForma(string $forma)
    {
        $this->forma = $forma;
    }
}
