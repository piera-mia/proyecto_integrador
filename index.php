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

  <body >
    <div class="container">
      <header class="encabezado">
        <nav class="main-nav">
            <ul class="left-nav">
              <li class="home"> <a href="index.php"> Home </a> </li>
              <li><a href="faq.php"> FAQ's </a></li>
              <li><a href="login.php"> Login </a></li>
              <li><a href="register.php"> Register </a></li>
            </ul>
        </nav>
      </header>
      <br>

      <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/s1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/s2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/s3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/s4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"> Previous </span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"> Next </span>
          </a>
        </div>

        <div class="presentacion">
            <h1> Runners Campana </h1>
            <p> Somos corredores recreativos y profesionales. El grupo de entrenamiento tiene sede en el campito de Siderca (ciudad de Campana). Los entrenamientos están dirigidos según el nivel y objetivo de cada atleta desde los niveles iniciales hasta avanzados, trabajando sobre objetivos como son las carreras de calle, trail y montaña en variadas distancias (corta, mediana y larga). </p>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong> Sumáte a nuestro equipo! </strong> </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button"> Semillero Runners (menores de 12 años) </button>
                  <button class="dropdown-item" type="button"> Adultos recreativo </button>
                  <button class="dropdown-item" type="button"> Maratonistas y ultramaratonistas </button>
                </div>
            </div>
        </div>

        <div class="grupoSecciones">
          <article class="seccion">
            <img class= "imagenSeccion" src="img/man-running.png" alt="">
            <h3 class= "tituloSeccion">Desafiá tus propios límites</h3>
            <p> Sólo bastan 21 días para convertir algo en rutina. Así que, ¡no te detengas! La meta conseguirá que te sientas feliz y satisfecho contigo mismo. </p>
            <a class="ingresarSeccion" href="#"> Ingresar </a>
          </article>
          <article class="seccion">
            <img class= "imagenSeccion" src="img/woman-running.png" alt="">
            <h3 class= "tituloSeccion"> Entrená al aire libre </h3>
            <p> Está comprobado que la actividad física al aire libre mejora nuestra calidad de vida social, psicológica y anímica donde el individuo se desarrolla plenamente en la actividad elegida. </p>
            <a class="ingresarSeccion" href="#"> Ingresar </a>
          </article>
          <article class="seccion">
            <img class= "imagenSeccion" src="img/both-running.png" alt="">
            <h3 class= "tituloSeccion"> Creá espíritu de equipo </h3>
            <p> El acondicionamiento físico acompañado por la teoría, el asesoramiento personalizado, consejos y planificaciones junto con las devoluciones constantes de los alumnos hace que los resultados sean mucho más eficientes. </p>
            <a class="ingresarSeccion" href="#"> Ingresar </a>
          </article>
        </div>



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
              </ul></h4>
            </article>
          </section>
      </footer>

      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>
