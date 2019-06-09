<?php
  require_once("helpers.php");
  require_once("controladores/funciones.php");
  if ($_POST) {
    $errores = validar($_POST,"login");
  }
?>

<!doctype html>
<html>
    <?php include("head.php");?>
  <body>
    <div class="container">
      <?php include("header.php");?>
      <main>
        <form class="formLogin" action="" method="POST" enctype= "multipart/form-data">
          <div>
            <h2> Recuperar contraseña </h2>
            <br>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"> Por favor ingresá tu mail para recuperar tu clave: </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>">
            <?php if(isset($errores["email"])) :?>
              <span>
            <?php echo $errores["email"] ?>
              </span>
            <?php endif; ?>
          </div>

          <div class="login-boton">
            <button type="submit" class="btn btn-primary"> Aceptar </button>
          </div>
          <span><?= (count($errores) == 0)? "Le hemos enviado un correo electrónico a su casilla para verificar su contraseña": "" ?></span>
        </form>
        <?php include("footer.php");?>
      </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
