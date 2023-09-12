<?php
// Conexión a la base de datos ficticia (reemplaza con tus propios datos)
$servername = "localhost";
$username = "angel";
$password = "Kurokonoba95";
$dbname = "lupoli";

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
$sql = "SELECT * FROM valores_cm";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Valor en cm</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["valor_cm"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay valores en la tabla.";}
// Cerrar la conexión a la base de datos
$conn->close();
?>
