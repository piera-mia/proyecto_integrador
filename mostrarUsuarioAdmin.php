<?php
  require_once("autoload.php");
  $id_usuario=$_GET["id"];
  $usuarioSeleccionado = Query::mostrarUsuario($pdo,'users',$id_usuario)
?>

<!DOCTYPE html>
<?php include("head.php");?>
  <div class="container">
    <?php include("header.php");?>
      <div>
        <h2> Datos del usuario </h2>
        <br>
      </div>
      <body>
        <div class="container">
          <?php foreach ($usuarioSeleccionado as $key => $value):?>
            <h2><?= $value["first_name"]." ".$value["last_name"] ;?></h2>
          <?php endforeach;?>
          <ul>
          <?php foreach ($usuarioSeleccionado as $index => $attributes) : ?>
            <?php foreach($attributes as $key => $value): ?>
              <li><?= $key." : ".$value ?> </li>
            <?php endforeach;?>
          <?php endforeach;?>
          </ul>
          <a href="listadoUsuariosAdmin.php">Retornar</a>
        </div>
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
