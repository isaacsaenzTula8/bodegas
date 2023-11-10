<?php 
include 'menuPrincipal.php';
?>

<div class="container min-vh-100 d-flex justify-content-center align-items-center" style="background-color:#E6E6FA">
<form action = "procesar_creacion_producto.php" >
  <div class="mb-3">
    <label class="form-label">Código:</label>
    <input type="text" class="form-control" id="codigoProd" name="codigo">
  </div>

  <div class="mb-3">
    <label class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="descripcionProd" name="descripcion">
  </div>
 
  <!-- este debería de cambiarse por un select y realizar un catalogo de unidades de medida-->
    <label class="form-label">Unidad de Medida:</label>
    <input type="text" class="form-control" id="unidadMedida" name="unidad_medida">
 
    <div class="mb-3">
    <label class="form-label">Precio:</label>
    <input type="text" class="form-control" id="codigoProd" name="precio">
  </div>
 
 <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>