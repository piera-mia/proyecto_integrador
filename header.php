<header class="encabezado">
  <nav class="main-nav">
      <ul class="left-nav">
        <li class="home"> <a href="index.php"> Home </a> </li>
        <li><a href="faq.php"> FAQ's </a></li>
        <li> <?php if(!isset($_SESSION["email"])) :?>
          <li><a href="login.php"> Login </a></li>
          <li><a href="registro.php"> Register </a></li>
          <?php else :?>
          <li><a href="logout.php"> Logout </a></li>
          <li><a href="edit.php"> Editar perfil </a></li>
          <li><a href="#"><?= "Hola, ".$_SESSION["nombre"];?></a></li>
          <li><a href="#"> <img src="fotosUsers/<?=$_SESSION["imagen"];?>" alt="foto_perfil" height="50px"></a></li>
          <?php endif; ?>
      </ul>
  </nav>
</header>
