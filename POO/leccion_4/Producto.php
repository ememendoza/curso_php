<?php

class Producto
{
    public string $descripcion;
    public float $precio;
    protected int $stockMinimo;
    protected string $estado = 'Activo';

    public function __construct(string $descripcion, float $precio)
    {
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    public function getInformacionProducto()
    {
        $productos = array(
            'producto' => $this->descripcion,
            'precio' => $this->precio,
            'stock_minimo' => $this->stockMinimo,
            'estado' => $this->estado
        );
        return $productos;
    }
}
