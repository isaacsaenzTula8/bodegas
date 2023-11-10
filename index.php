<!-- En tu archivo menu.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Menú Principal</title>
    <!-- Enlace a Bootstrap (puedes usar un CDN o un archivo local) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistema de Traslado de Bodegas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Botón de Productos con menú desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProductos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownProductos">
                        <a class="dropdown-item" href="create_producto.php">Crear</a>
                        <a class="dropdown-item" href="update_producto.php">Modificar</a>
                        <a class="dropdown-item" href="delete_producto.php">Eliminar</a>
                    </div>
                </li>

                <!-- Botón de Bodegas con menú desplegable -->
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

                <!-- Botón de Traslados con menú desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTraslados" role- button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Traslados
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTraslados">
                        <a class="dropdown-item" href="realizar_traslado.php">Realizar Traslado</a>
                    </div>
                </li>

                <!-- Botón de Reportes con menú desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownReportes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reportes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownReportes">
                        <a class="dropdown-item" href="reportes_por_fechas.php">Por Fechas</a>
                        <a class="dropdown-item" href="reportes_por_meses.php">Por Meses</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
