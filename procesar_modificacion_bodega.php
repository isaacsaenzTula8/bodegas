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
$direccion = $_POST['direccion'];
$responsable = $_POST['responsable'];

// Actualizar la bodega en la base de datos
$sql = "UPDATE bodegas SET codigo='$codigo', descripcion='$descripcion', direccion='$direccion', responsable='$responsable' WHERE id=$id";

if ($conexion->query($sql) === true) {
    echo "Bodega modificada con éxito.";
} else {
    echo "Error al modificar la bodega: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
