<?php
include("registro.php");

  if ($_POST) {
    $errores = validar($_POST,"registro");
    if (count($errores)== 0) {
      $nuevo_perfil = armarperfil($_FILES);
      $nuevo_usuario = armaruser($_POST,$perfil);
      modificaruser($nuevo_usuario);
      header("location: login.php");
      exit;
    }
  }
?>
