<?php

require_once 'CtrPersona.php';
require_once 'Conexion.php';

class CtrVendedor extends CtrPersona {
    private $carnet;
    private $direccion;

    public function __construct($codigo, $email, $nombre, $telefono, $carnet, $direccion) {
        parent::__construct($codigo, $email, $nombre, $telefono);
        $this->carnet = $carnet;
        $this->direccion = $direccion;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Vendedor (codigo, carnet, direccion) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo, $this->carnet, $this->direccion]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT Persona.*, Vendedor.carnet, Vendedor.direccion FROM Persona INNER JOIN Vendedor ON Persona.codigo = Vendedor.codigo";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE Vendedor SET carnet = ?, direccion = ? WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->carnet, $this->direccion, $this->codigo]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Vendedor WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo]);
    }
}

?>