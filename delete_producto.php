<?php 
include 'menuPrincipal.php';
?>
    <h1>Eliminar Producto</h1>
    <?php
    // Recuperar el ID del producto a eliminar desde la URL
    $id_producto = $_GET['id'];

    // Conexión a la base de datos (debes tener tus credenciales aquí)
    $conexion = new mysqli("localhost", "root", "", "bodegas");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Eliminar el producto de la base de datos
    $sql = "DELETE FROM productos WHERE id = $id_producto";

    if ($conexion->query($sql) === true) {
        echo "Producto eliminado con éxito.";
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
