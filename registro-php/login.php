<?php
if(isset($_REQUEST["btn-s"])){
    $correo = $_REQUEST["correo"];
    $contraseña = $_REQUEST["contrasena"];
  
    $consulta = "SELECT nombre, correo, contraseña FROM usuarios WHERE correo = '$correo' AND contrasena = '$contraseña' ";
    $response = mysqli_query($conex, $consulta);
    if($response){
      session_destroy();
      session_start();
      foreach ($response as $usuario ) {
        $_SESSION["start"] = $usuario["nombre"];
  
      }
      header("location:../index");
    }else{
      echo "usuario no encontrado";
    }
  
  }

?>
