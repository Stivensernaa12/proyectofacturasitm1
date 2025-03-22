<?php

require_once 'Conexion.php';

class CtrProductosPorFactura {
    private $cantidad;
    private $subtotal;
    private $numero_factura;
    private $codigo_producto;

    public function __construct($numero_factura, $codigo_producto, $cantidad, $subtotal) {
        $this->numero_factura = $numero_factura;
        $this->codigo_producto = $codigo_producto;
        $this->cantidad = $cantidad;
        $this->subtotal = $subtotal;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO ProductosPorFactura (numero_factura, codigo_producto, cantidad, subtotal) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->numero_factura, $this->codigo_producto, $this->cantidad, $this->subtotal]);
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM ProductosPorFactura";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        $sql = "UPDATE ProductosPorFactura SET cantidad = ?, subtotal = ? WHERE numero_factura = ? AND codigo_producto = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->cantidad, $this->subtotal, $this->numero_factura, $this->codigo_producto]);
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM ProductosPorFactura WHERE numero_factura = ? AND codigo_producto = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$this->numero_factura, $this->codigo_producto]);
    }
}

?>
