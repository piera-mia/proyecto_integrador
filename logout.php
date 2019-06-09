<?php
  session_start();
  "Adios, ".$_SESSION["nombre"];
  session_destroy();
  setcookie("email","",time()-1);
  setcookie("password","",time()-1);
  header("location:index.php");
?>
