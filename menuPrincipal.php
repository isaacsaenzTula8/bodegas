<?php 
include 'header.php';
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Traslado de Bodegas </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Productos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="create_producto.php">Crear</a></li>
            <li><a class="dropdown-item" href="update_producto.php">Modificar</a></li>
            <li><a class="dropdown-item" href="delete_producto.php">Eliminar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Bodegas</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="crear_bodega.php">Crear</a></li>
            <li><a class="dropdown-item" href="modificar_bodega.php">Modificar</a></li>
            <li><a class="dropdown-item" href="eliminar_bodega.php">Eliminar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="realizar_traslado.php">Traslados</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Reportes</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Por Fechas</a></li>
            <li><a class="dropdown-item" href="#">Por Mes</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>