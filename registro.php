<?php

include("conexion.php");

if (isset($_POST['register'])) {
   if (strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1) {
      $usuario = trim($_POST['correo']);
      $contraseña = trim($_POST['password']);
      $consulta = "INSERT INTO usuarios(usuario, contrasena) VALUES ('$usuario', '$contraseña')";
      $resultado = mysqli_query($conex, $consulta);

   }

}

?>