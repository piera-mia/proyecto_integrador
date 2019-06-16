<?php
require_once("helpers.php");
require_once("controladores/funciones.php");
?>

<!doctype html>
<html>
  <?php include("head.php");?>
  <body >
    <div class="container">
      <?php include("header.php");?>

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

        <?php include("footer.php");?>

      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>
