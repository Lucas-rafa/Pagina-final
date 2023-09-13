<?php

 require_once("../conexion/conexion.php");

if ($conexion->conexionect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->conexionect_error);
}

// Recibir datos del formulario
$numero_tarjeta = $_POST['inputNumero'];
$nombre = $_POST['inputNombre'];
$mes_expiracion = $_POST['selectMes'];
$year_expiracion = $_POST['selectYear'];
$ccv = $_POST['inputCCV'];

// SQL para insertar datos en la tabla (ajusta el nombre de la tabla y las columnas según tu estructura)
$sql = "INSERT INTO tarjeta_credito (numero_tarjeta, nombre, mes_expiracion, year_expiracion, ccv) 
        VALUES ('$numero_tarjeta', '$nombre', '$mes_expiracion', '$year_expiracion', '$ccv')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos de tarjeta almacenados correctamente.";
} else {
    echo "Error al almacenar los datos de la tarjeta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
