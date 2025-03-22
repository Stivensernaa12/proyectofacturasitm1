<?php
require_once 'config/Conexion.php';
$conexion = Conexion::conectar();
if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error de conexión.";
}
?>
<?php
class Conexion {
    private static $host = "localhost";
    private static $db = "proyectofacturasitm1";
    private static $user = "root"; // Usuario por defecto en XAMPP
    private static $pass = ""; // Sin contraseña en XAMPP
    private static $conexion = null;

    public static function conectar() {
        if (self::$conexion === null) {
            try {
                self::$conexion = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$pass);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$conexion;
    }
}
?>
