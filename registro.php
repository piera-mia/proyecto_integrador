<?php
require_once("helpers.php");
require_once("controladores/funciones.php");
if($_POST){
  $errores = validar($_POST);
  if(count($errores)== 0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: login.php");
    exit;

}
}

 ?>


<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title> Proyecto Integrador </title>
  </head>

  <body>
    <div class="container">
      <header class="encabezado">
        <nav class="main-nav">

            <ul class="left-nav">
              <li class="home"><a href="index.php"> Home </a></li>
              <li><a href="faq.php"> FAQ's </a></li>
              <li><a href="login.php"> Login </a></li>
              <li><a href="registro.php"> Register </a></li>
            </ul>
        </nav>
      </header>

      <main>
      <form class="formLogin" action="" method="POST" enctype= "multipart/form-data">
        <div>
          <h2> Register </h2>
          <br>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputName4"> Nombre </label>
            <input type="name" class="form-control" id="inputName4"  placeholder="Nombre" name="nombre" value="">
            <?php if(isset($errores["nombre"])) :?>
               <span>
                 <?php echo $errores["nombre"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-8">
            <label for="inputSurname4"> Apellido </label>
            <input type="surname" class="form-control" id="inputSurname4" placeholder="Apellido" name="apellido">
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
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1"> Masculino </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2"> Femenino </label>
            </div>

          </div>
          <div class="form-group col-md-5">
            <label for="inputZip"> Edad </label>
            <input type="text" class="form-control" name="edad">
              <?php if(isset($errores["edad"])) :?>
                <span>
              <?php echo $errores["edad"] ?>
                </span>
              <?php endif; ?>
          </div>
          <div class="form-group col-md-5">
            <label for="inputAddress"> Región </label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Campana, Zárate, CABA u otra" name="region">
            <?php if(isset($errores["region"])) :?>
              <span>
            <?php echo $errores["region"] ?>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity"> Peso (kg) </label>
            <input type="text" class="form-control" name="peso">
            <?php if(isset($errores["peso"])) :?>
              <span>
            <?php echo $errores["peso"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip"> Altura (en cm) </label>
            <input type="text" class="form-control" name="altura">
            <?php if(isset($errores["altura"])) :?>
              <span>
            <?php echo $errores["altura"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState"> Ritmo medio en carrera </label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option> Menor a 4 min/km </option>
              <option> 4 a 5 min/km </option>
              <option> 5 a 6 min/km </option>
              <option> Mayor a 6 min/km </option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            <?php if(isset($errores["email"])) :?>
              <span>
            <?php echo $errores["email"] ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4"> Contraseña </label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" name="password">
            <?php if(isset($errores["password"])) :?>
              <span>
            <?php echo $errores["password"] ?>
              </span>
            <?php endif; ?>
          </div>
        </div>

        <div class="form-group text-center">
        <label for="imagen"> Foto de perfil </label>
        <br>
        <input type="file" name="imagen" >
        <?php if(isset($errores["imagen"])) :?>
           <span>
              <?php echo $errores["imagen"] ?>
           </span>
        <?php endif; ?>
      </div>

        <div class="login-boton">
          <button type="submit" class="btn btn-primary"> Enviar </button>
        </div>

      </form>

      <footer>
        <section class="footer row d-flex">
          <article class="col-12 col-md-12 col-lg-12">
            <ul class"d-flex justify-content-center">
              <li><p class="parrafoFooter"> Follow us </p></li>
              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://ar.linkedin.com/"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </article>
        </section>
    </footer>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
