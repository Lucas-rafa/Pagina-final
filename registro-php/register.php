<?php
// Obtener los datos del formulario de registro

// Conectar a la base de datos (reemplaza con tus propios detalles de conexión)
require_once("../conexion/conexion.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if(isset($_REQUEST["btn-r-s"])){
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $insert_query = "INSERT INTO usuarios (nombre, correo, usuario, contrasena) VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";
    if ($conexion->query($insert_query) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }
}
// Insertar los datos en la tabla de usuarios


// Cerrar la conexión
$conexion->close();
?>
