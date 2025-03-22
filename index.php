<?php
require_once 'config/Conexion.php';

$conexion = Conexion::conectar();

if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "No se pudo conectar.";
}
?>
