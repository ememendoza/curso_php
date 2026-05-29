<?php

require_once('Autoload.php');
class Usuario extends Conexion
{
    private string $nombre;
    private int $telefono;
    private string $correo;
    private string $direccion;
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function insertar(string $nombre, int $telefono, string $correo, string $direccion)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->direccion = $direccion;

        try {
            $sql = "INSERT INTO usuario(nombre, telefono, correo, direccion) VALUES (:nombre, :telefono, :correo, :direccion)";
            $insert = $this->conexion->prepare($sql);
            $datos = array(
                ":nombre" => $this->nombre,
                ":telefono" => $this->telefono,
                ":correo" => $this->correo,
                ":direccion" => $this->direccion
            );
            $insert->execute($datos);
            $idInsertado = $this->conexion->lastInsertId();
            $insert->closeCursor();
            return $idInsertado;
        } catch (Exception $e) {
            print("Error: " . $e->getMessage());
        }
    }

    public function consultar()
    {
        try {
            $sql = "SELECT * FROM usuario";
            $ejecutar = $this->conexion->query($sql);
            return $ejecutar->fetchAll(PDO::FETCH_ASSOC);
            $ejecutar->closeCursor();
        } catch (Exception $e) {
            print("Error: " . $e->getMessage());
        }
    }

    public function buscar(int $id)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
            $datos = array(":id_usuario" => $id);
            $ejecutar = $this->conexion->prepare($sql);
            $ejecutar->execute($datos);
            return $ejecutar->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            print("Error: " . $e->getMessage());
        }
    }

    public function actualizar(int $id, string $nombre, int $telefono, string $correo, string $direccion)
    {

        try {
            $sql = "UPDATE usuario SET nombre = :nombre, telefono = :telefono, correo = :correo, direccion =:direccion WHERE id_usuario = :id";
            $update = $this->conexion->prepare($sql);
            $datos = array(
                ":id" => $id,
                ":nombre" => $nombre,
                ":telefono" => $telefono,
                ":correo" => $correo,
                ":direccion" => $direccion
            );
            $update->execute($datos);
            $update->closeCursor();
        } catch (Exception $e) {
            print("Error: " . $e->getMessage());
        }
    }

    public function eliminar(int $id)
    {
        try {
            $sql = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
            $datos = array(":id_usuario" => $id);
            $ejecutar = $this->conexion->prepare($sql);
            $ejecutar->execute($datos);
        } catch (Exception $e) {
            print("Error: " . $e->getMessage());
        }
    }
}
