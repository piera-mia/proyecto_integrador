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
          <h2> Preguntas frecuentes </h2>
          <br>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Nunca he corrido en mi vida, estoy en condiciones de comenzar a entrenar con Runners Campana?
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Claro que sí, Runners Campana admite personas de cualquier sexo, edad y estado físico. Cada runner tiene un plan de entrenamiento con objetivos individuales.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Cuántos km tendré que correr durante mi primer entrenamiento con Runners Campana?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Probablemente no debas correr más de 2 km, al ritmo que te permita tu corazón.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0 ">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Qué debo llevar para mi primer entrenamiento con Runners Campana?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Sólo es necesario llevar ropa y calzado deportivo. A medida que se avance en el entrenamiento, se definirá el calzado más adecuado a las necesidades y la mejor forma de hidratación.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Existe la opción de entrenar a distancia con Runners Campana?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            Sí, existe la opción de disponer de un plan personalizado y seguimiento vía WhatSapp y portal web. De todos modos, es recomendable asistir de manera presencial con una frecuencia preacordada con el profesor.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Es obligatorio usar un reloj con GPS?
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            A partir de cierto nivel tu propia ambición va a pedirte un reloj para medir tu evolución. De todos modos, no es mandatario.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingSix">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Debo llevar apto médico desde el primer entrenamiento con Runners Campana?
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
            Lo ideal sería traer el certificado de aptitud médica firmado por un cardiólogo y una ergometría realizados hasta 6 meses antes de comenzar a entrenar.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingSeven">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Cuánto dura cada sesión de entrenamiento?
            </button>
          </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
            Por lo general, y excepto casos puntuales dependiendo de los objetivos de cada uno, cada sesión de entrenamiento está dividida en las fases: técnica de carrera (10 min), entrada en calor (15 min), entrenamiento propiamente dicho (30 min), afloje (5 min) y estiramiento (10 min).
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingEight">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              Es obligatoria la asistencia los fines de semana?
            </button>
          </h2>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
          <div class="card-body">
            No es obligatoria pero sí es recomendable participar de los "fondos de los domingos" a medida que se vaya avanzando en el entreamiento ya que durante domingos y feriados hay más tiempo para entrenar el ritmo de larga distancia.
          </div>
        </div>
      </div>
    </div>
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
