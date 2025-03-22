<?php

require_once 'Conexion.php';
require_once 'Persona.php';

class Cliente extends Persona {
    private $credito;

    public function __construct($codigo, $email, $nombre, $telefono, $credito) {
        parent::__construct($codigo, $email, $nombre, $telefono);
        $this->credito = $credito;
    }

    public function guardar() {
        $conexion = Conexion::conectar();
        try {
            parent::guardar();
            $sql = "INSERT INTO Cliente (codigo, credito) VALUES (?, ?)";
            $stmt = $conexion->prepare($sql);
            return $stmt->execute([$this->codigo, $this->credito]);
        } catch (Exception $e) {
            die("Error al guardar cliente: " . $e->getMessage());
        }
    }

    public static function obtenerTodos() {
        $conexion = Conexion::conectar();
        $sql = "SELECT Persona.*, Cliente.credito FROM Persona INNER JOIN Cliente ON Persona.codigo = Cliente.codigo";
        $stmt = $conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar() {
        $conexion = Conexion::conectar();
        try {
            parent::actualizar();
            $sql = "UPDATE Cliente SET credito = ? WHERE codigo = ?";
            $stmt = $conexion->prepare($sql);
            return $stmt->execute([$this->credito, $this->codigo]);
        } catch (Exception $e) {
            die("Error al actualizar cliente: " . $e->getMessage());
        }
    }

    public function eliminar() {
        $conexion = Conexion::conectar();
        try {
            $sql = "DELETE FROM Cliente WHERE codigo = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$this->codigo]);
            return parent::eliminar();
        } catch (Exception $e) {
            die("Error al eliminar cliente: " . $e->getMessage());
        }
    }
}

?>

