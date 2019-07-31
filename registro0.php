<?php
  require_once("helpers.php");
  require_once("controladores/funciones.php");
  if ($_POST) {
    $errores = validar($_POST,"registro");
    if (count($errores)== 0) {
      $perfil = armarperfil($_FILES);
      $usuario = armaruser($_POST,$perfil);
      guardaruser($usuario);
      header("location: login.php");
      exit;
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
          <h2> Register </h2>
          <br>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputName4"> Nombre </label>
            <input type="name" class="form-control" id="inputName4"  placeholder="Nombre" name="nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>">
            <?php if(isset($errores["nombre"])) :?>
               <span>
                 <?php echo $errores["nombre"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-8">
            <label for="inputSurname4"> Apellido </label>
            <input type="surname" class="form-control" id="inputSurname4" placeholder="Apellido" name="apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>">
            <?php if(isset($errores["apellido"])) :?>
       <span>
          <?php echo $errores["apellido"] ?>
       </span>
    <?php endif; ?>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="inputCity"> Sexo </label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="M">
              <label class="form-check-label" for="gridRadios1"> Masculino </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="F">
              <label class="form-check-label" for="gridRadios2"> Femenino </label>
            </div>

          </div>
          <div class="form-group col-md-3">
            <label for="inputZip"> Edad </label>
            <input type="text" class="form-control" name="edad" value="<?= isset($errores["edad"])? "": persistir("edad") ?>">
              <?php if(isset($errores["edad"])) :?>
                <span>
              <?php echo $errores["edad"] ?>
                </span>
              <?php endif; ?>
          </div>
          <!-- <div class="form-group col-md-5">
            <label for="inputAddress"> Región </label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Campana, Zárate, CABA u otra" name="region" value="<?= isset($errores["region"])? "": persistir("region") ?>">
            <?php if(isset($errores["region"])) :?>
              <span>
            <?php echo $errores["region"] ?>
              </span>
            <?php endif; ?>
          </div>
        </div> -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity"> Peso (kg) </label>
            <input type="text" class="form-control" name="peso" value="<?= isset($errores["peso"])? "": persistir("peso") ?>">
            <?php if(isset($errores["peso"])) :?>
              <span>
            <?php echo $errores["peso"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-6">
            <label for="inputZip"> Altura (en cm) </label>
            <input type="text" class="form-control" name="altura" value="<?= isset($errores["altura"])? "": persistir("altura") ?>">
            <?php if(isset($errores["altura"])) :?>
              <span>
            <?php echo $errores["altura"] ?>
              </span>
            <?php endif; ?>
          </div>
          <!-- <div class="form-group col-md-4">
            <label for="inputState"> Ritmo medio en carrera </label>
            <select id="inputState" class="form-control" name="ritmo" value="<?= isset($errores["ritmo"])? "": persistir("ritmo") ?>">
              <option selected>Elige...</option>
              <option> Menor a 5 min por km </option>
              <option> 5 a 6 min por km </option>
              <option> Mayor a 6 min por km </option>
              <option> Sin referencias </option>
            </select>
          </div> -->
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputEmail4"> Email </label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?= isset($errores["email"])? "": persistir("email") ?>">
            <?php if(isset($errores["email"])) :?>
              <span>
            <?php echo $errores["email"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4"> Contraseña </label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="password" value="<?= isset($errores["password"])? "": persistir("password") ?>">
            <?php if(isset($errores["password"])) :?>
              <span>
            <?php echo $errores["password"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-4">
            <label for="imagen"> Foto de perfil </label>
            <br>
            <input type="file" name="imagen">
            <?php if(isset($errores["imagen"])) :?>
            <span>
            <?php echo $errores["imagen"] ?>
            </span>
            <?php endif; ?>
          </div>
        </div>

        <!-- <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity"> Ya sos parte del equipo? </label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="equipo" id="gridRadios1" value="S">
              <label class="form-check-label" for="gridRadios1"> Sí </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="equipo" id="gridRadios2" value="N">
              <label class="form-check-label" for="gridRadios2"> No </label>
            </div>
            <?php if(isset($errores["equipo"])) :?>
            <span>
            <?php echo $errores["equipo"] ?>
            </span>
            <?php endif; ?>
          </div>
        </div> -->

        <div class="login-boton col-md-12">
          <button type="submit" class="btn btn-primary"> Enviar </button>
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
