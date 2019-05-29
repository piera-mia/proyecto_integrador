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
              <li class="home"><a href="index.php">Home</a></li>
              <li><a href="faq.php">FAQ's</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
      </header>
      <main>

      <form class="formLogin">
        <div>
          <h2> Login </h2>
          <br>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
          <small id="emailHelp" class="form-text text-muted">Por favor, ingrese un email válido.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
        </div>
        <div class="login-boton">
          <button type="submit" class="btn btn-primary">Login</button>
          <a class = "text-primary" href="#">¿Olvidó su contraseña?</a>
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
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
