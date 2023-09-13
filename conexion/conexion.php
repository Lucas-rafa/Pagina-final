<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
  $username = "angel";
  $password = "Kurokonoba95";
  $database = "agro_tec";
  
  $conexion = new mysqli($servername, $username, $password, $database);
?>