<?php

 require_once("../conexion/conexion.php");

if ($conexion->conexionect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->conexionect_error);
}


if(isset($_REQUEST["btn-t"])){
    // Recibir datos del formulario
    $numero_tarjeta = $_POST['numero'];
    $nombre = $_POST['nombre'];
    $mes_expiracion = $_POST['mes'];
    $year_expiracion = $_POST['año'];
    $ccv = $_POST['cvv'];
    // SQL para insertar datos en la tabla (ajusta el nombre de la tabla y las columnas según tu estructura)
    $sql = "INSERT INTO tarjeta_credito (numero_tarjeta, nombre, mes_expiracion, year_expiracion, ccv) 
            VALUES ('$numero_tarjeta', '$nombre', '$mes_expiracion', '$year_expiracion', '$ccv')";
    
    if ($conexion->query($sql)) {
        echo "Datos de tarjeta almacenados correctamente.";
        header("location:../index.html");
    } else {
        echo "Error al almacenar los datos de la tarjeta: " . $conexion->error;
    }
    
    // Cerrar la conexión
    $conexion->close();
}

?>
