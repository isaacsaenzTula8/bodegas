<?php 
include 'menuPrincipal.php';
?>
    <div class="container">
        <h1 class="mt-5">Formulario para Realizar Traslados</h1>
        <form action="procesar_traslado.php" method="post">
            <div class="form-group">
                <label for="producto">Selecciona el producto:</label>
                <select class="form-control" name="producto" id="producto">
                    <?php
                    // Conexión a la base de datos (debes tener tus credenciales aquí)
                    $conexion = new mysqli("localhost", "root", "", "bodegas");

                    // Verificar la conexión
                    if ($conexion->connect_error) {
                        die("Error en la conexión: " . $conexion->connect_error);
                    }

                    // Consulta para obtener la lista de productos desde la base de datos
                    $query = "SELECT id, descripcion FROM productos";
                    $result = $conexion->query($query);

                    // Iterar a través de los resultados y generar las opciones del select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['descripcion'] . '</option>';
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" name="cantidad" id="cantidad">
            </div>
            <div class="form-group">
                <label for="bodega_origen">Bodega de Origen:</label>
                <select class="form-control" name="bodega_origen" id="bodega_origen">
                    <?php
                    // Conexión a la base de datos (debes tener tus credenciales aquí)
                    $conexion = new mysqli("localhost", "root", "", "bodegas");

                    // Verificar la conexión
                    if ($conexion->connect_error) {
                        die("Error en la conexión: " . $conexion->connect_error);
                    }

                    // Consulta para obtener la lista de bodegas desde la base de datos
                    $query = "SELECT id, descripcion FROM bodegas";
                    $result = $conexion->query($query);

                    // Iterar a través de los resultados y generar las opciones del select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['descripcion'] . '</option>';
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="bodega_destino">Bodega de Destino:</label>
                <select class="form-control" name="bodega_destino" id="bodega_destino">
                    <?php
                    // Conexión a la base de datos (debes tener tus credenciales aquí)
                    $conexion = new mysqli("localhost", "root", "", "bodegas");

                    // Verificar la conexión
                    if ($conexion->connect_error) {
                        die("Error en la conexión: " . $conexion->connect_error);
                    }

                    // Consulta para obtener la lista de bodegas desde la base de datos
                    $query = "SELECT id, descripcion FROM bodegas";
                    $result = $conexion->query($query);

                    // Iterar a través de los resultados y generar las opciones del select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['descripcion'] . '</option>';
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Realizar Traslado</button>
        </form>
    </div>
</body>
</html>
