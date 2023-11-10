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
$unidad_medida = $_POST['unidad_medida'];
$precio = $_POST['precio'];

// Insertar el nuevo producto en la base de datos
$sql = "INSERT INTO productos (codigo, descripcion, unidad_medida, precio) VALUES ('$codigo', '$descripcion', '$unidad_medida', '$precio')";

if ($conexion->query($sql) === true) {
    echo "Producto creado con éxito.";
} else {
    echo "Error al crear el producto: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
