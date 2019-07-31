<?php
  require_once("autoload.php");
  if (!isset($_SESSION["email"])) {
      redirect("registro.php");
  } else {
    $email=$_SESSION["email"];
    $listadoCarreras = Query::carrerasObjetivo($pdo,$email);
  }
?>

<html>
  <?php include("head.php");?>
    <div class="container">
      <?php include("header.php");?>
        <div>
          <h2> Carreras Objetivo </h2>
          <br>
        </div>
        <div class="container">
          <section class="row text-center ">
            <article class="col-12" >
              <h3><?=$_SESSION["nombre"]." ".$_SESSION["apellido"];?>, tus próximos objetivos son </h3>
              <br>
              <p>
              <img src="img/fotosUsers/<?=$_SESSION["imagen"];?>" alt="Avatar" height=130px>
              </p>
              <p>
                <?php foreach ($listadoCarreras as $key => $value): ?>
                    <ul><?= $value["title"].": ".$value["goal_date"]?></ul>
                <?php endforeach;?>
              </p>
            </article>
          </section>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</html>
