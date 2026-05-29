<?php

require_once("Autoload.php");

$usuario = new Usuario();

//$insertar = $usuario->insertar("Mario Mendoza", 3507083407, "mario.me@email.com", "Avenida la Juevetud 11, Valledupar");

print_r("<pre>");
print_r($usuario->buscar(16));
print_r("</pre>");

$usuario->eliminar(16);

print_r("<pre>");
print_r($usuario->buscar(16));
print_r("</pre>");
