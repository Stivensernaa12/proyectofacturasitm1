<?php
// Configuración de la conexión
$host = "localhost"; 
$dbname = "bdfacturas"; // Asegúrate de que este sea el nombre correcto de tu base de datos
$username = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña vacía en XAMPP

try {
    // Crear la conexión usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>¡Conexión a la base de datos exitosa!</h2>";
} catch (PDOException $e) {
    echo "<h2>Error de conexión: " . $e->getMessage() . "</h2>";
}
?>

