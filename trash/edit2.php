<?php
  require_once("helpers.php");
  require_once("controladores/funciones.php");
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
            <h2> Login </h2>
            <br>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"> Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>">
            <?php if(isset($errores["email"])) :?>
              <span>
            <?php echo $errores["email"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"> Contraseña </label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" name="password">
            <?php if(isset($errores["password"])) :?>
              <span>
            <?php echo $errores["password"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-5">
            <label for="inputAddress"> Región </label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Campana, Zárate, CABA u otra" name="region" value="<?= isset($errores["region"])? "": persistir("region") ?>">
            <?php if(isset($errores["region"])) :?>
              <span>
            <?php echo $errores["region"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState"> Ritmo medio en carrera </label>
            <select id="inputState" class="form-control" name="ritmo" value="<?= isset($errores["ritmo"])? "": persistir("ritmo") ?>">
              <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Elige..." )? "selected" : "" ; ?>>Elige...</option>
              <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Menor a 5 min por km" )? "selected" : "" ; ?>> Menor a 5 min por km </option>
              <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "5 a 6 min por km" )? "selected" : "" ; ?>> 5 a 6 min por km </option>
              <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Mayor a 6 min por km" )? "selected" : "" ; ?>> Mayor a 6 min por km </option>
              <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Sin referencias" )? "selected" : "" ; ?>> Sin referencias </option>
            </select>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="recordar">
            <label class="form-check-label" for="exampleCheck1"> Recuérdame </label>
          </div>
          <div class="login-boton">
            <button type="submit" class="btn btn-primary"> Ingresar </button>
            <a class = "text-primary" href="recuperar_contras.php"> ¿Olvidó su contraseña? </a>
          </div>
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
