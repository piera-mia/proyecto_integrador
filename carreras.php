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

  $carreras = Query::listado($pdo,"goals");
?>

<!doctype html>
<html>
  <?php include("head.php");?>
  <link rel="stylesheet" href="css/styles.css">;
  <body>
    <div class="container">
      <?php include("header.php");?>
        <main>
          <h2> Cuál será tu próximo desafío? </h2>
          <br>
            <?php foreach ($carreras as $key => $carrera) : ?>
              <div>
                <strong>Descripción: </strong> <?=$carrera['title'];?>
                <br>
                <strong>Fecha: </strong> <?=$carrera['goal_date'];?>
                <br>
                <hr>
              </div>
            <?php endforeach; ?>
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
