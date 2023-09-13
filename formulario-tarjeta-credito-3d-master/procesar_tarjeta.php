<?php
// Conexión a la base de datos (reemplaza con tus propios valores)
$servername = "localhost";
$username = "angel";
$password = "Kurokonoba95";
$database = "tarjetas";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recibir datos del formulario
$numero_tarjeta = $_POST['inputNumero'];
$nombre = $_POST['inputNombre'];
$mes_expiracion = $_POST['selectMes'];
$year_expiracion = $_POST['selectYear'];
$ccv = $_POST['inputCCV'];

// SQL para insertar datos en la tabla (ajusta el nombre de la tabla y las columnas según tu estructura)
$sql = "INSERT INTO tarjetas (numero_tarjeta, nombre, mes_expiracion, year_expiracion, ccv) 
        VALUES ('$numero_tarjeta', '$nombre', '$mes_expiracion', '$year_expiracion', '$ccv')";

if ($conn->query($sql) === TRUE) {
    echo "Datos de tarjeta almacenados correctamente.";
} else {
    echo "Error al almacenar los datos de la tarjeta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
