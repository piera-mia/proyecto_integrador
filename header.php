<header class="encabezado">

  <div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="faq0.php">FAQ's</a>
    <a href="#contact">Contact</a>
    <?php if(!isset($_SESSION["email"])) :?>
    <div class="topnav-right">
      <a href="login.php">Login</a>
      <a href="registro.php">Register</a>
    </div>
    <?php else :?>
      <div class="topnav-right">
        <a href="logout.php">Logout</a>
        <a href="carrerasObjetivo.php">Próximos Objetivos</a>
        <div>
          <p class="saludo"><?= "Hola, ".$_SESSION["nombre"];?>
          <img class="avatar" src="img/fotosUsers/<?=$_SESSION["imagen"];?>" alt="foto_perfil"</p>
        </div>
        <?php if($_SESSION["role"]==9):?>
          <a href="listadoUsuariosAdmin.php"> Administración de Usuarios </a>
        <?php endif;?>
      </div>
    <?php endif; ?>
  </div>

</header>
