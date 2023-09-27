<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "angel";
$password = "Kurokonoba95";
$database = "MiBaseDeDatos"; // El nombre de la base de datos que creaste

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO Personas (Nombre, Apellidos, Dirección, Teléfono, Edad, Altura, Peso) VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', $edad, $altura, $peso)";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
