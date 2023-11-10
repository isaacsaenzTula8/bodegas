<?php 
include 'menuPrincipal.php';
?>
    <h1>Modificar Bodega</h1>
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
        echo '<form action="procesar_modificacion_bodega.php" method="post">';
        echo 'Código: <input type="text" name="codigo" value="' . $bodega['codigo'] . '"><br>';
        echo 'Descripción: <input type="text" name="descripcion" value="' . $bodega['descripcion'] . '"><br>';
        echo 'Dirección: <input type="text" name="direccion" value="' . $bodega['direccion'] . '"><br>';
        echo 'Responsable: <input type="text" name="responsable" value="' . $bodega['responsable'] . '"><br>';
        echo '<input type="hidden" name="id" value="' . $id_bodega . '">';
        echo '<input type="submit" value="Guardar Cambios">';
        echo '</form>';
    } else {
        echo "Bodega no encontrada.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
