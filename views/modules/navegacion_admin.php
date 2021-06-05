<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DoricaEliza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Usuarios
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?action=mostrar_usuarios">Mostrar</a>
        <a class="dropdown-item" href="index.php?action=buscar_usuarios">Buscar</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Productos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?action=registrar_producto">Registro</a>
        <a class="dropdown-item" href="index.php?action=mostrar_productos">Mostrar</a>
      </div>
    </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Pedidos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.php?action=mostrar_pedidos">Pedidos</a>
        <a class="dropdown-item" href="index.php?action=mostrar_grafica">Grafica</a>
      </div>
          
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
      <a class="nav-link" href=""><span><strong>BIENVENIDO <?php echo $_SESSION['usuario']['nombre'];?></span></strong></a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=log_out"><span>Salir</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
  });
</script>

