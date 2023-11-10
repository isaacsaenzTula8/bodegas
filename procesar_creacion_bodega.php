<?php
// Conexión a la base de datos (debes tener tus credenciales aquí)
$conexion = new mysqli("localhost", "root", "", "bodegas");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
$responsable = $_POST['responsable'];

// Insertar la nueva bodega en la base de datos
$sql = "INSERT INTO bodegas (codigo, descripcion, direccion, responsable) VALUES ('$codigo', '$descripcion', '$direccion', '$responsable')";

if ($conexion->query($sql) === true) {
    echo "Bodega creada con éxito.";
} else {
    echo "Error al crear la bodega: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
