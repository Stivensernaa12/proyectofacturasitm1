<?php

require_once 'Conexion.php';

class CtrEmpresa {
    private $codigo;
    private $nombre;

    public function __construct($codigo, $nombre) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Empresa (codigo, nombre) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo, $this->nombre]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM Empresa";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE Empresa SET nombre = ? WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->nombre, $this->codigo]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Empresa WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo]);
    }
}

?>