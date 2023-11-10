<?php
// Conexión a la base de datos (debes tener tus credenciales aquí)
$conexion = new mysqli("localhost", "root", "", "bodegas");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$unidad_medida = $_POST['unidad_medida'];
$precio = $_POST['precio'];

// Actualizar el producto en la base de datos
$sql = "UPDATE productos SET codigo='$codigo', descripcion='$descripcion', unidad_medida='$unidad_medida', precio='$precio' WHERE id=$id";

if ($conexion->query($sql) === true) {
    echo "Producto modificado con éxito.";
} else {
    echo "Error al modificar el producto: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
