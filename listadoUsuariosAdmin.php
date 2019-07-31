<?php

require_once("autoload.php");

$listadoUsuarios = Query::listado($pdo,'users');

?>

<!DOCTYPE html>
<html>
  <?php include("head.php");?>
    <div class="container">
      <?php include("header.php");?>
          <h2> Listado usuarios </h2>
          <br>
    </div>
    <body>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"> # </th>
              <th scope="col"> Usuarios </th>
              <th scope="col"> Mostrar </th>
              <th scope="col"> Modificar </th>
              <th scope="col"> Borrar </th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($listadoUsuarios as $key => $value):?>
                <tr>
                  <th scope="row"> <?= $value["id"] ?> </th>
                  <td> <?=$value["first_name"]." ".$value["last_name"];?> </td>
                  <td><a href="mostrarUsuarioAdmin.php?id=<?=$value['id'];?>">
                        <i class="far fa-eye"></i>
                      </a>
                  </td>
                  <td><a href="modificarUsuarioAdmin.php?id=<?=$value['id'];?>">
                        <i class="far fa-edit"></i>
                      </a>
                  </td>
                  <td><a href="eliminarUsuarioAdmin.php?id=<?=$value['id'];?>">
                        <i class="far fa-trash-alt"></i>
                      </a>
                  </td>

                </tr>
              <?php endforeach;?>
          </tbody>
      </div>
  <a href="perfil.php">Retornar</a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
