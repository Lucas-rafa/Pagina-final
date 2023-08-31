
<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "angel", "Kurokonoba95", "ejercicio");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$edad = $_POST["edad"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];

// Insertar los datos en la base de datos
$insert_query = "INSERT INTO informacion_personal (nombre, apellidos, direccion, telefono, edad, altura, peso)
                 VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', $edad, $altura, $peso)";

if ($conexion->query($insert_query) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>