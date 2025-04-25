<?php
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña por defecto en XAMPP
$dbname = "asistencia_evento";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$asistencia = $_POST['asistencia'];
$personas = $_POST['personas'];
$comentarios = $_POST['comentarios'];

// Insertar datos en la base de datos
$sql = "INSERT INTO asistencia (nombre, telefono, asistencia, personas, comentarios) VALUES ('$nombre', '$telefono', '$asistencia', '$personas', '$comentarios')";

if ($conn->query($sql) === TRUE) {
    echo "Datos almacenados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
