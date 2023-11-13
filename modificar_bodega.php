<?php 
include 'menuPrincipal.php';
?>
    <div class=" text-center mt-5 ">
        <h1 >Modificar producto</h1>
    <!--agregar imagen de productos desde carpeta -->
        <img src="imagenes/bodega.png" class="img-fluid" alt="Responsive image" style="width:50px; height:50px " >
    </div>
    <?php
    // Recuperar el ID de la bodega a modificar desde la URL
    $id_bodega = $_GET['id'];

    // Conexión a la base de datos (debes tener tus credenciales aquí)
    $conexion = new mysqli("servidor", "usuario", "contraseña", "basededatos");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Obtener los datos de la bodega a modificar
    $sql = "SELECT * FROM bodegas WHERE id = $id_bodega";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $bodega = $resultado->fetch_assoc();
        // Mostrar el formulario con los datos actuales de la bodega
        echo '<div class="container min-vh-100 d-flex justify-content-center align-items-center" style="background-color:#E6E6FA">';
        echo '<div class="card mt-2 mx-auto p-4 bg-light">';
        echo '<div class="card-body bg-light">';
        echo '<form action="procesar_modificacion_bodega.php" method="post">';
        //código
        echo '<div class="mb-3">';
        echo '<label class="form-label">Código:</label>';
        echo '<input type="text" class="form-control" id="codigoProd" name="codigo" value="' . $bodega['codigo'] . '"><br>';
        echo '</div>';
        //descripción
        echo '<div class="mb-3">';
        echo '<label class="form-label">Descripción:</label>';
        echo '<input type="text" class="form-control" id="desc" name="descripcion" value="' . $bodega['descripcion'] . '"><br>';
        echo '</div>';
        //unidad de medida
        echo '<div class="mb-3">';
        echo '<label class="form-label">Dirección:</label>';
        echo '<input type="text" class="form-control" id="unidadMedida" name="unidad_medida" value="' . $bodega['direccion'] . '"><br>';
        echo '</div>';
        //precio
        echo '<div class="mb-3">';
        echo '<label class="form-label">Responsable:</label>';
        echo '<input type="text" class="form-control" id="precioProd" name="precio" value="' . $bodega['responsable'] . '"><br>';
        echo '</div>';
        echo '<input type="hidden" name="id" value="' . $id_bodega . '">';
        echo '<button type="submit" class="btn btn-primary btn-send>Guardar Cambios</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "Bodega no encontrada.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>

