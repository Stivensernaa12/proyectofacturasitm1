<?php

require_once 'Conexion.php';

class Factura {
    private $fecha;
    private $numero;
    private $total;
    private $codigo_cliente;

    public function __construct($fecha, $numero, $total, $codigo_cliente) {
        $this->fecha = $fecha;
        $this->numero = $numero;
        $this->total = $total;
        $this->codigo_cliente = $codigo_cliente;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Factura (fecha, numero, total, codigo_cliente) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->fecha, $this->numero, $this->total, $this->codigo_cliente]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM Factura";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE Factura SET fecha = ?, total = ?, codigo_cliente = ? WHERE numero = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->fecha, $this->total, $this->codigo_cliente, $this->numero]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Factura WHERE numero = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->numero]);
    }
}

?>
