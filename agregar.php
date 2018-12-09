<?php
require "php/agregarProd.php";


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Agregar Productos</title>
</head>
  <style media="screen">
    body {
      background-color: rgb(161, 161, 161);
    }
  </style>
  <body>
    <div class="container">
      <header>
        <h1>Agregar Productos</h1>
        <a class="btn btn-primary" href="index.php">Volver al buscador</a>
        <br>
      </header>
      <section class="formulario">
        <form  id="form-agregar" class="" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nombre_prod">Producto:</label>
            <input required autocomplete="off" class="form-control" id="nombre_prod" type="text" name="nombre_prod" value="">
          </div>

          <div class="form-group">
            <label for="precio_costo">Precio de Costo:</label>
            <input required autocomplete="off" class="form-control" id="precio_costo" type="number" step="any" name="precio_costo" value="">
          </div>

          <div class="form-group">
            <label for="precio_venta">Precio de Venta:</label>
            <input required autocomplete="off" class="form-control" id="precio_venta" type="number" step="any" name="precio_venta" value="">
          </div>

          <div class="form-group">
            <label for="proveedor">Proveedor</label>
            <input autocomplete="off" class="form-control" id="proveedor" type="text" name="proveedor" value="">
          </div>
          <br>
          <select class="custom-select" name="categoria">
            <option value="Sin categoria">Seleccionar categoria</option>
            <option value="fiambreria">Fiambreria</option>
            <option value="almacen">Almacen</option>
            <option value="lacteos">Lacteos</option>
            <option value="congelados">Congelados</option>
            <option value="bebidas_sin_alcohol">Bebidas sin alcohol</option>
            <option value="bebidas_con_alcohol">Bebidas con Alcohol</option>
          </select>

          <div class="form-group">
            <br>
            <label for="imagen">Subir una Imagen</label>
            <input type="file" class="form-control-file" id="imagen" name="img-producto">
          </div>

          <div class="d-flex justify-content-center">
            <div class="custom-control custom-checkbox">
              <input type="checkbox"  name="check-oferta"class="custom-control-input" id="customCheck1" value="1">
              <label class="custom-control-label" for="customCheck1">Quieres ponerlo en OFERTA?</label>
            </div>
          </div>


          <input id="btn-agregar" class="btn btn-success float-right" type="submit" name="btn-agregar" value="Agregar">

        </form>

      </section>

      <!--
      <div id="alerta-guardado" class="alert alert-success" role="alert"><strong>GUARDADO!!!</strong>exitoso</div>
      -->
    </div>

  <script src="js/agregarProd.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
