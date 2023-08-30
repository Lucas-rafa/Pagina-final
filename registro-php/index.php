<?php
// Obtener los datos del formulario de registro
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Conectar a la base de datos (reemplaza con tus propios detalles de conexión)
$conexion = new mysqli("localhost", "angel", "Kurokonoba95", "agro_tec");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Insertar los datos en la tabla de usuarios
$insert_query = "INSERT INTO usuarios (nombre, correo, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

if ($conexion->query($insert_query) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
