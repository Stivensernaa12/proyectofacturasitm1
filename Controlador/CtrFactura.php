<?php

require_once 'Conexion.php';

class CtrFactura {
    private $fecha;
    private $numero;
    private $total;

    public function __construct($fecha, $numero, $total) {
        $this->fecha = $fecha;
        $this->numero = $numero;
        $this->total = $total;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO Factura (fecha, numero, total) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->fecha, $this->numero, $this->total]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM Factura";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE Factura SET fecha = ?, total = ? WHERE numero = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->fecha, $this->total, $this->numero]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM Factura WHERE numero = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->numero]);
    }
}

?>
