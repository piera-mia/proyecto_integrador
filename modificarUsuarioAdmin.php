<?php
require_once("autoload.php");

if (isset($_GET["id"])) {
  $id_usuario=$_GET["id"];
  $usuarioAModificar = Query::usuarioModificar($pdo,'users',$id_usuario);
}

if (isset($_POST["modificar"])) {
    foreach ($_POST as $key => $value) {
    $sql="UPDATE users SET $key='$value' WHERE users.id=:id";
    $query=$pdo->prepare($sql);
    $query->bindValue(':id',$_POST['id']);
    $query->execute();
    header('Location:listadoUsuariosAdmin.php');
    }
  } elseif (isset($_POST["no"])){
      header('Location:listadoUsuariosAdmin.php');
      exit;
  }
 ?>

<!DOCTYPE html>
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
                  <h2><?= $usuarioAModificar["first_name"]." ".$usuarioAModificar["last_name"] ;?></h2>
                  <br>
                  <?php foreach ($usuarioAModificar as $key => $value) : ?>
                      <label><?= $key?> :</label>
                      <?php if($key =="id"){?>
                          <input type="text" disabled name="<?= $key?>" value="<?= $value?> ">
                      <?php }else{?>
                          <input type="text" name="<?= $key?>" value="<?= $value?>">
                      <?php }?>
                      <br>
                <?php endforeach;?>
                <br>

              <form class="formLogin" action="" method="POST" enctype= "multipart/form-data">
                <p> Está seguro de que quiere modificar este usuario? </p>
                <div class="login-boton col-md-6">
                  <button type="submit" class="btn btn-primary" name="modificar" value="SI"> SÍ </button>
                  <button type="submit" class="btn btn-primary" name="no" value="NO"> NO </button>
                </div>
                <input type="hidden" name="id" value="<?=$id_usuario;?>">
             </form>
          </div>
        </body>
      </main>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
