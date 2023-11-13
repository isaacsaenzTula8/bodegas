// Ultima edicion: 2021-06-15
// Creacion: 2021-06-15

      <div class=" text-center mt-5 ">
    <h1 >Modificar producto</h1>
    <!--agregar imagen de productos desde carpeta -->
    <img src="imagenes/productos.png" class="img-fluid" alt="Responsive image" style="width:50px; height:50px " >
  </div>
    <?php
    // Recuperar el ID del producto a modificar desde la URL
    $id_producto = $_GET['id'];

    // Conexión a la base de datos (debes tener tus credenciales aquí)
    $conexion = new mysqli("localhost", "root", "", "bodegas");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Obtener los datos del producto a modificar
    $sql = "SELECT * FROM productos WHERE id = $id_producto";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $producto = $resultado->fetch_assoc();
        // Mostrar el formulario con los datos actuales del producto
        // se agregó el html dentro de php para no perder el formato original de la página pero puede mejorarse
        echo '<div class="container min-vh-100 d-flex justify-content-center align-items-center" style="background-color:#E6E6FA">';
        echo '<div class="card mt-2 mx-auto p-4 bg-light">';
        echo '<div class="card-body bg-light">';
        echo '<form action="procesar_modificacion_producto.php" method="post">';
        //código
        echo '<div class="mb-3">';
        echo '<label class="form-label">Código:</label>';
        echo '<input type="text" class="form-control" id="codigoProd" name="codigo" value="' . $producto['codigo'] . '"><br>';
        echo '</div>';
        //descripción
        echo '<div class="mb-3">';
        echo '<label class="form-label">Descripción:</label>';
        echo '<input type="text" class="form-control" id="desc" name="descripcion" value="' . $producto['descripcion'] . '"><br>';
        echo '</div>';
        //unidad de medida
        echo '<div class="mb-3">';
        echo '<label class="form-label">Unidad de Medida:</label>';
        echo '<input type="text" class="form-control" id="unidadMedida" name="unidad_medida" value="' . $producto['unidad_medida'] . '"><br>';
        echo '</div>';
        //precio
        echo '<div class="mb-3">';
        echo '<label class="form-label">Precio:</label>';
        echo '<input type="text" class="form-control" id="precioProd" name="precio" value="' . $producto['precio'] . '"><br>';
        echo '</div>';
        echo '<input type="hidden" name="id" value="' . $id_producto . '">';
        echo '<button type="submit" class="btn btn-primary btn-send>Guardar Cambios</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo "Producto no encontrado.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>