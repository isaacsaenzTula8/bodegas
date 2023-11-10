<?php
// Conexión a la base de datos (debes tener tus credenciales aquí)
$conexion = new mysqli("localhost", "root", "", "bodegas");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$bodega_origen = $_POST['bodega_origen'];
$bodega_destino = $_POST['bodega_destino'];

// Insertar un registro en la tabla de traslados para llevar un registro
$sql = "INSERT INTO traslados (producto, cantidad, bodega_origen, bodega_destino) 
        VALUES ('$producto', $cantidad, '$bodega_origen', '$bodega_destino')";

if ($conexion->query($sql) === true) {
    echo "Traslado registrado con éxito.";
} else {
    echo "Error al registrar el traslado: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
