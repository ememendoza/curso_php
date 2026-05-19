<?php
require_once("./leccion_1/Operacion.php");
require_once("./leccion_2/Usuario.php");
require_once("./leccion_3/Empleado.php");
require_once("./leccion_3/Cliente.php");


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

Herencia();
