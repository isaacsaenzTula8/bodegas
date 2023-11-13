<?php 
include 'menuPrincipal.php';
?>
  <div class=" text-center mt-5 ">
    <h1 >Crear Nueva Bodega</h1>
    <!--agregar imagen de productos desde carpeta -->
    <img src="imagenes/bodega.png" class="img-fluid" alt="Responsive image" style="width:50px; height:50px " >
  </div>
  <div class="container min-vh-100 d-flex justify-content-center align-items-center" style="background-color:#E6E6FA">
  <div class="card mt-2 mx-auto p-4 bg-light">
    <div class="card-body bg-light">
    <form action="procesar_creacion_bodega.php" method="post">
    <div class="mb-3">
        <label class="form-label">Código:</label>
        <input type="text" class="form-control" id="codigoProd" name="codigo">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción:</label>
        <input type="text" class="form-control" id="descripcionProd" name="descripcion">
    </div>

    <div class="mb-3">
        <label class="form-label">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>
    <div class="mb-3">
        <label class="form-label">Responsable:</label>
        <input type="text" class="form-control" id="responsable" name="responsable">
    </div>
    <button type="submit" class="btn btn-primary btn-send">Guardar</button>
    </form>

