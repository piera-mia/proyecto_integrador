<?php
  require_once("autoload.php");

  if (isset($_GET["id"])) {
    $id_usuario=$_GET["id"];
    $usuarioSeleccionado = Query::mostrarUsuario($pdo,'users',$id_usuario);
  }

  //esto se ejecuta si el usuario indica que desea borrar el usuario
  if (isset($_POST["borrar"])) {
    Query::borrarUsuario($pdo,'users',$id_usuario);
    header('Location:listadoUsuariosAdmin.php');
    exit;
  //var_dump($_POST);
  }
  elseif (isset ($_POST["no"])) {
    header("Location:listadoUsuariosAdmin.php");
    exit;
  }
?>
<html>
  <?php include("head.php");?>
    <div class="container">
      <?php include("header.php");?>
        <div>
          <h2> Eliminar usuarios </h2>
          <br>
        </div>
        <main>
          <body>
            <div class="container">
                <?php foreach ($usuarioSeleccionado as $key => $value):?>
                  <h1><?= $value["first_name"]." ".$value["last_name"] ;?></h1>
                <?php endforeach;?>
                <ul>
                <?php foreach ($usuarioSeleccionado as $index => $attributes) : ?>
                  <?php foreach($attributes as $key => $value): ?>
                    <li><?= $key." : ".$value ?> </li>
                  <?php endforeach;?>
                <?php endforeach;?>
                </ul>
                <form class="formLogin" action="" method="POST" enctype= "multipart/form-data">
                  <p> Está seguro de que quiere eliminar este usuario? </p>
                  <div class="login-boton col-md-12">
                    <button type="submit" class="btn btn-primary" name="borrar" value="SI"> SÍ </button>
                    <button type="submit" class="btn btn-primary" name="no" value="NO"> NO </button>
                  </div>
                  <input type="hidden" name="id" value="<?=$id_usuario;?>">
               </form>
            </div>
          </body>
      </main>
    <?php include("footer.php");?>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </html>
?>
