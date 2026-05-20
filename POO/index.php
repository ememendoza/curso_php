<?php
//require_once("./leccion_1/Operacion.php");
//require_once("./leccion_2/Usuario.php");
//require_once("./leccion_3/Empleado.php");
//require_once("./leccion_3/Cliente.php");
//require_once("./leccion_4/Producto.php");
//require_once("./leccion_4/Mueble.php");
//require_once("./leccion_4/Mesa.php");
//require_once("./leccion_5/Empleado.php");
//require_once("./leccion_5/Cliente.php");
require_once("./leccion_6/Operacion.php");


function Operacion()
{
    $operacion = new Operacion(20, 10);

    print("Total Suma: " . $operacion->getSuma() . "<br>");
    print("Total Resta: " . $operacion->getResta() . "<br>");
    print("Total Multiplicacion: " . $operacion->getMultiplicacion() . "<br>");
    print("Total División: " . $operacion->getDivision() . "<br>");
}

function Objeto()
{
    $usuario = new Usuario("Mario Mendoza", "eme@info.com", "Admin");
    $usuario->verPerfil();
    print("<br><br>");
    $usuario->setClave('Eme2002hw');
    $usuario->verPerfil();
}

function Herencia()
{
    $empleado = new Empleado(1066285875, "Mario Mendoza", 24);
    $empleado->setPuesto("Desarrollador");

    print($empleado->getDatosPersonales());
    print("Puesto: " . $empleado->getPuesto());

    $cliente = new Cliente(1065667832, "Camilo", 20);
    $cliente->setCredito(28.322);

    print($cliente->getDatosPersonales());
    print("Credito: " . $cliente->getCredito());
}

function Polimorfismo()
{
    $producto = new Producto("HotWheels", 7.500);

    print_r("<pre>");
    print_r($producto);
    print_r("</pre>");

    $mueble = new Mueble("Cama", 2.300999, "Beige", "Madera");

    print_r("<pre>");
    print_r($mueble);
    print_r("</pre>");

    $mesa = new Mesa("Mesa Abstracta", 2.400000, "Beige", "Roble", "6 Puestos");
    $mesa->setForma("Cuadrada");

    print_r("<pre>");
    print_r($mesa);
    print_r("</pre>");
}

function Abstraccion()
{
    $empleado = new Empleado(1066285875, "Mario Mendoza", 24);
    $empleado->setPuesto("Desarrollador");
    print($empleado->getDatosPersonales());
    $empleado->setMensaje("Soy un empleado de aplicaciones :)");

    print($empleado->getMensaje());

    $cliente = new Cliente(1065667832, "Camilo", 20);
    $cliente->setCredito(28.322);
    print($cliente->getDatosPersonales());
    $cliente->setMensaje("Soy un cliente de la aplicación :)");

    print($cliente->getMensaje());
}

function Interfaces()
{
    $operacion = new Operacion();
    print($operacion->raizCuadrada(12) . '<br>');
    print($operacion->potencia(4, 2) . '<br>');
    print($operacion->calculosBasicos(20, 10, "-") . '<br>');
}

Interfaces();
