<?php 
include 'menuPrincipal.php';
?>
    <h1>Eliminar Bodega</h1>
    <?php
    // Recuperar el ID de la bodega a eliminar desde la URL
    $id_bodega = $_GET['id'];

    // Conexión a la base de datos (debes tener tus credenciales aquí)
    $conexion = new mysqli("localhost", "root", "", "bodegas");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Eliminar la bodega de la base de datos
    $sql = "DELETE FROM bodegas WHERE id = $id_bodega";

    if ($conexion->query($sql) === true) {
        echo "Bodega eliminada con éxito.";
    } else {
        echo "Error al eliminar la bodega: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
