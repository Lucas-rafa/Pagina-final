<?php
// Obtener los datos del formulario de inicio de sesión
if (isset($_POST["btn-login"])) {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Conectar a la base de datos (reemplaza con tus propios detalles de conexión)
    $conexion = new mysqli("localhost", "angel", "Kurokonoba95", "agro_tec");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Consultar la base de datos para verificar las credenciales del usuario
    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows === 1) {
        // El usuario se autenticó correctamente
        echo "Inicio de sesión exitoso";
        header("location:../index.html");
        // Puedes redirigir al usuario a una página de bienvenida aquí
    } else {
        // Las credenciales son incorrectas
        echo "Correo o contraseña incorrectos";
    }

    // Cerrar la conexión
    $conexion->close();
}
?>
