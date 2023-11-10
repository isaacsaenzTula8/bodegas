<!DOCTYPE html>
<html>
<head>
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Modificar Producto</h1>
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
        echo '<form action="procesar_modificacion_producto.php" method="post">';
        echo 'Código: <input type="text" name="codigo" value="' . $producto['codigo'] . '"><br>';
        echo 'Descripción: <input type="text" name="descripcion" value="' . $producto['descripcion'] . '"><br>';
        echo 'Unidad de Medida: <input type="text" name="unidad_medida" value="' . $producto['unidad_medida'] . '"><br>';
        echo 'Precio: <input type="text" name="precio" value="' . $producto['precio'] . '"><br>';
        echo '<input type="hidden" name="id" value="' . $id_producto . '">';
        echo '<input type="submit" value="Guardar Cambios">';
        echo '</form>';
    } else {
        echo "Producto no encontrado.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
