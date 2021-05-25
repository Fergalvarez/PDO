<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DoricaEliza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=mostrar_articulo1">Blusas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=mostrar_articulo2">Vestidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=mostrar_articulo3">Accesorios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=mostrar_contacto">Contacto</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link btn btn-success text-white" href="index.php?action=mostrar_carrito">
            Carrito
            <?php if (isset($_SESSION['shopping_car']) && count($_SESSION['shopping_car']) > 0) { ?>
              <span class="badge badge-light"><?= count($_SESSION['shopping_car']) ?></span>
            <?php } ?>
          </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="index.php?action=login_usuario"><span> Iniciar sesión</span></a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?action=registrar_usuario"><span>Registrarse</span></a></li>
      </ul>
    </div>
  </div>
</nav>