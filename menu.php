<!DOCTYPE html>
<html>
<head>
    <title>Menú Principal</title>
    <!-- Enlace a Bootstrap (puedes usar un CDN o un archivo local) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Sistema de Traslado de Bodegas</h1>  
        <!-- Botón principal que despliega el menú -->        
        <div class="form-group">
                <!-- Menú de "Productos" con opciones desplegables -->
                <div class="form-group">
                    <label for="producto">PRODUCTOS</label><br>
                    <a href="create_producto.php"><button>CREAR</button></a><br>
                    <br><a href="update_producto.php"><button>MODIFICAR</button></a><br>
                    <br><a href="delete_producto.php"><button>EMILINAR</button></a><br>                    
                </div>
                <!-- Menú de "Bodegas" con opciones desplegables -->
                <div class="form-group">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBodegas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bodegas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownBodegas">
                        <a class="dropdown-item" href="crear_bodega.php">Crear</a>
                        <a class="dropdown-item" href="modificar_bodega.php">Modificar</a>
                        <a class="dropdown-item" href="eliminar_bodega.php">Eliminar</a>
                    </div>
                </li>
                </div>
                <!-- Menú de "Traslados" con opciones desplegables -->
                <div class="form-group">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTraslados" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Traslados
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTraslados">
                        <a class="dropdown-item" href="realizar_traslado.php">Realizar Traslado</a>
                    </div>
                </li>
                </div>
                <!-- Menú de "Reportes" con opciones desplegables -->
                <div class="form-group">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownReportes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownReportes">
                        <a class="dropdown-item" href="reportes_por_fechas.php">Por Fechas</a>
                        <a class="dropdown-item" href="reportes_por_meses.php">Por Meses</a>
                    </div>
                </li>
                </div>
        </div>    
    <!-- Resto de tu contenido -->
    </div>
</body>
</html>
