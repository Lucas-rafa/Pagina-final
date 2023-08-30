
<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "angel", "Kurokonoba95", "mi_base_de_datos") or die("error al conectart");
if($conexion){
    echo "conexion exitosa";
    
}
   echo "hola mundo";
// Verificar la conexión
$conexion->close();
?>
