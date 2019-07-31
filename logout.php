<?php
  session_start();
  "Adios, ".$_SESSION["nombre"]." ".$_SESSION["apellido"];
  session_destroy();
  setcookie("email","",time()-1);
  setcookie("password","",time()-1);
  header("location:index.php");
?>
