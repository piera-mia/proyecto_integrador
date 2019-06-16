<header class="encabezado">

  <div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="faq.php">FAQ's</a>
    <a href="#contact">Contact</a>
    <?php if(!isset($_SESSION["email"])) :?>
    <div class="topnav-right">
      <a href="login.php">Login</a>
      <a href="registro.php">Register</a>
    </div>
    <?php else :?>
      <div class="topnav-right">
        <a href="logout.php">Logout</a>
        <a href="edit.php">Editar Perfil</a>

        <div>
          <p class="saludo"><?= "Hola, ".$_SESSION["nombre"];?></p>
        </div>


      </div>
    <?php endif; ?>
  </div>

</header>
