<?php
if(isset($_REQUEST["btn-s"])){
    $correo = $_REQUEST["correo"];
    $contraseña = $_REQUEST["contraseña"];
  
    $consulta = "SELECT nombre, correo, contraseña FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' ";
    $response = mysqli_query($conex, $consulta);
    if($response){
      session_destroy();
      session_start();
      foreach ($response as $usuario ) {
        $_SESSION["start"] = $usuario["nombre"];
  a
      }
      header("location:../home");
    }else{
      echo "usuario no encontrado";
    }
  
  }

?>
