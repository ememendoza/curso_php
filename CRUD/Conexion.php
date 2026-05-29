<?php

class Conexion
{
    private $host = "localhost";
    private $user = "eme";
    private $password = "Eme2002db";
    private $db = "db_sistema";
    private $connect;

    public function __construct()
    {
        try {
            $stringConnection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
            $this->connect = new PDO($stringConnection, $this->user, $this->password);

            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->connect = "Error de Conexión\n";
            print("Error: " . $e->getMessage());
        }
    }

    public function connect()
    {
        return $this->connect;
    }
}
