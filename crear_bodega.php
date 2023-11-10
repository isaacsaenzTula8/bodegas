<?php 
include 'menuPrincipal.php';
?>
    <h1>Crear Nueva Bodega</h1><br>
    <form action="procesar_creacion_bodega.php" method="post">
        Código:      <br><input type="text" name="codigo"><br>
        Descripción: <br><input type="text" name="descripcion"><br>
        Dirección:   <br><input type="text" name="direccion"><br>
        Responsable: <br><input type="text" name="responsable"><br>
        <br><input type="submit" value="Guardar">
    </form>
</body>
</html>
