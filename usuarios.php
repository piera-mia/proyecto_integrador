<?php
  require_once("autoload.php");

  if ($_POST) {
    $errores = validar($_POST,"login");
      if (count($errores) == 0) {
      $usuario = buscar_email($_POST["email"]);
      if ($usuario == null) {
        $errores["email"]= "Usuario / Contraseña invalidos";
      } else {
        if (password_verify($_POST["password"],$usuario["password"])==false) {
          $errores["password"]="Usuario / Contraseña invalidos";
        } else {
          set_user($usuario,$_POST);
          if (valid_access()) {
            header("location: index.php");
            exit;
          } else {
            header("location: login.php");
            exit;
          }
        }
      }
    }
  }

  $usuarios = Query::listado($pdo,"users");
?>

<!doctype html>
<html>
  <?php include("head.php");?>
  <link rel="stylesheet" href="css/styles.css">;
  <body>
    <div class="container">
      <?php include("header.php");?>
        <main>
          <h2> Conoce a nuestros amigos runners... </h2>
          <br>

            <?php foreach ($usuarios as $key => $usuario) : ?>
              <div class="col col-6 col-md-4">
                <br>
                <img class= "fotoUsuario" src='img/fotosUsers/<?=$usuario['avatar']?>' alt="foto_Usuario" height="150px">
                <h3><?=$usuario['first_name'];?> <?=$usuario['last_name'];?></h3>
                <strong>Edad: </strong><?=$usuario['age'];?>
                <br>
                <strong>Peso (kg): </strong><?=$usuario['weight'];?>
                <br>
                <strong>Altura (cm) :</strong><?=$usuario['height'];?>
                <br>
                <strong>Email: </strong><?=$usuario['email'];?>
                <br>
              </div>
            <?php endforeach; ?>

            <!-- <div class="row">
              <div class="col col-6 col-md-4">.col-6 .col-md-4</div>
              <div class="col col-6 col-md-4">.col-6 .col-md-4</div>
              <div class="col col-6 col-md-4">.col-6 .col-md-4</div>
            </div> -->





        </main>
<?php include("footer.php");?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>