<?php

namespace Interfaces;

require_once('Calcular.php');
require_once('OperacionesBasicas.php');

class Operacion implements Calcular, OperacionesBasicas
{
    public function raizCuadrada(float $numero): float
    {
        return sqrt($numero);
    }

    public function potencia(int $numero, int $potencia): int
    {
        return pow($numero, $potencia);
    }

    public function calculosBasicos(int $numero1, int $numero2, string $mensaje): string
    {
        $resultado = 0;
        switch ($mensaje) {
            case '+':
                $resultado = $numero1 + $numero2;
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                break;
            default:
                return "El simbolo no existe";
                break;
        }

        return strval($resultado);
    }
}
