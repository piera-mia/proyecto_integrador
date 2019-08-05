<?php
  require_once("autoload.php");
    if (!isset($_SESSION["email"])) {
        redirect("registro.php");
    } else {
      $sesionesUsuario = Query::sesionesUsuario($pdo,$_SESSION["email"]);
      // dd($sesionesUsuario);
    }
  ?>

<!doctype html>
<html>
  <?php include("head.php");?>
  <link rel="stylesheet" href="css/styles.css">;
  <body>
    <div class="container">
      <?php include("header.php");?>
        <main>
          <h2> Mira tu historial de entrenamiento... </h2>
          <br>

          <table class="table">
            <thead>
              <tr>
                <th>
                  Descripción
                </th>
                <th>
                  Fecha
                </th>
              </tr>
            </thread>
            <tbody>
              <?php foreach ($sesionesUsuario as $key => $value) :?>
              <tr>
                <td>
                  <?=$sesionesUsuario[$key]['description']?>
                </td>
                <td>
                  <?=$sesionesUsuario[$key]['date']?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>



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
