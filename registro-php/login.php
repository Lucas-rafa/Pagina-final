<?php
// Conectar a la base de datos (reemplaza con tus propios detalles de conexión)
$conexion = new mysqli("localhost", "angel", "Kurokonoba95", "agro_tec");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if(isset($_POST["btn-login"])){
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    // Consulta para verificar las credenciales
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($consulta);
    
    if ($resultado->num_rows > 0) {
        // Inicio de sesión exitoso, redirigir a la página de inicio o mostrar un mensaje de bienvenida
        echo "Inicio de sesión exitoso. ¡Bienvenido, $usuario!";
    } else {
        // Las credenciales no coinciden, mostrar un mensaje de error
        echo "Error: Credenciales incorrectas. Por favor, intenta nuevamente.";
    }
}

// Cerrar la conexión
$conexion->close();
?>