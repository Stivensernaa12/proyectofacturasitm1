<?php

require_once 'Conexion.php';

class Producto {
    private $codigo;
    private $nombre;
    private $stock;
    private $valorUnitario;

    public function __construct($codigo, $nombre, $stock, $valorUnitario) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->stock = $stock;
        $this->valorUnitario = $valorUnitario;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Producto (codigo, nombre, stock, valorUnitario) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo, $this->nombre, $this->stock, $this->valorUnitario]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM Producto";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE Producto SET nombre = ?, stock = ?, valorUnitario = ? WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->nombre, $this->stock, $this->valorUnitario, $this->codigo]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Producto WHERE codigo = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->codigo]);
    }
}

?>
