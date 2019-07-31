<?php
  require_once("autoload.php");

  if ($_POST) {
    $tipoConexion = "MYSQL";
    if ($tipoConexion=="JSON") {
        $usuario = new Usuario(null, null, null, null, null, null, $_POST["email"],$_POST["password"], null);
        $errores= $validar->validacionLogin($usuario);
        if(count($errores)==0) {
          $usuarioEncontrado = $json->buscarPorEmail($usuario->getEmail());
          if ($usuarioEncontrado == null) {
            $errores["email"]="Usuario no registrado";
          } else {
            if (Autenticador::verificarPassword($usuario->getPassword(),$usuarioEncontrado["password"])!=true) {
              $errores["password"]="Error en los datos ingresados";
            } else {
              Autenticador::seteoSesion($usuarioEncontrado);
              if(isset($_POST["recordar"])) {
                Autenticador::seteoCookie($usuarioEncontrado);
              }
              if(Autenticador::validarUsuario()) {
                redirect("perfil.php");
              } else {
                redirect("registro.php");
              }
            }
          }
        }
    } else {
        $usuario = new Usuario(null, null, null, null, null, null, $_POST["email"],$_POST["password"], null);
        $errores= $validar->validacionLogin($usuario);
        if(count($errores)==0) {
          $usuarioEncontrado = BaseMYSQL::buscarPorEmail($usuario->getEmail(),$pdo,'users');
          if ($usuarioEncontrado == false) {
            $errores["email"]="Usuario no registrado";
          } else {
            if(Autenticador::verificarPassword($usuario->getPassword(),$usuarioEncontrado["password"])!=true) {
              $errores["password"]="Error en los datos ingresados";
            } else {
              Autenticador::seteoSesion($usuarioEncontrado);
              if (isset($_POST["recordar"])) {
                Autenticador::seteoCookie($usuarioEncontrado);
              }
              if (Autenticador::validarUsuario()) {
                redirect("perfil.php");
              } else {
                redirect("registro.php");
              }
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
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="recordar">
            <label class="form-check-label" for="exampleCheck1"> Recuérdame </label>
          </div>
          <div class="login-boton">
            <button type="submit" class="btn btn-primary"> Ingresar </button>
            <a class = "text-primary" href="recuperar_contras.php"> ¿Olvidó su contraseña? </a>
          </div>
        </form>
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
