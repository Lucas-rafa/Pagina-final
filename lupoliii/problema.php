<?php
// Conexión a la base de datos ficticia (reemplaza con tus propios datos)
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_de_la_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el valor en centímetros del formulario
if (isset($_POST['valor_cm'])) {
    $valorCm = $_POST['valor_cm'];

    // Insertar el valor en la base de datos
    $sql = "INSERT INTO valores_cm (valor_cm) VALUES ('$valorCm')";

    if ($conn->query($sql) === TRUE) {
        echo "Valor en cm guardado correctamente.";
    } else {
        echo "Error al guardar el valor en cm: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
