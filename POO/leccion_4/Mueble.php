<?php

require_once("Producto.php");

class Mueble extends Producto
{
    public string $color;
    public string $material;
    public string $status = 'agotado';

    function __construct(string $descripcion, float $precio, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);
        $this->color = $color;
        $this->material = $material;
    }

    public function getInformacionProducto()
    {
        $productos = array(
            'producto' => $this->descripcion,
            'precio' => $this->precio,
            'stock_minimo' => $this->stockMinimo,
            'estado' => $this->estado,
            'color' => $this->color,
            'material' => $this->material
        );
        return $productos;
    }
}
