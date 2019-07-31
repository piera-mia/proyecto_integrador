<?php
  require_once("autoload.php");

  if (!isset($_SESSION["email"])) {
      redirect("registro.php");
  }
?>

<html>
  <?php include("head.php");?>
    <div class="container">
      <?php include("header.php");?>
        <div>
          <h2> Perfil de Usuario </h2>
          <br>
        </div>
        <div class="container">
          <section class="row text-center ">
            <article class="col-12" >
              <h3> Bienvenid@, <?=$_SESSION["nombre"]." ".$_SESSION["apellido"];?> </h3>
              <h3> Usted ha iniciado sesión </h3>
              <br>
              <br>
              <br>
              <p>
              <img src="img/fotosUsers/<?=$_SESSION["imagen"];?>" alt="Avatar" height=130px>
              </p>
              <p>
              <?php if($_SESSION["role"]==9):?>
                <h3> <a href="listadoUsuariosAdmin.php"> Administración de Usuarios </a> </h3>
              <?php endif;?>
              </p>
            </article>
          </section>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</html>
