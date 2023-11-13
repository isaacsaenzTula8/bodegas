<?php 
include 'menuPrincipal.php';
?>
  <div class=" text-center mt-5 ">
    <h1 >Productos</h1>
    <!--agregar imagen de productos desde carpeta -->
    <img src="imagenes/productos.png" class="img-fluid" alt="Responsive image" style="width:50px; height:50px " >
  </div>
<div class="container min-vh-100 d-flex justify-content-center align-items-center" style="background-color:#E6E6FA">
  <div class="card mt-2 mx-auto p-4 bg-light">
    <div class="card-body bg-light">
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
    <input type="text" class="form-control" id="precioProd" name="precio">
  </div>
 
 <button type="submit" class="btn btn-primary btn-send">Guardar</button>
</form>
    </div>
  </div>
</div>