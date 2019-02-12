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
      background-color: rgba(237, 168, 14, 0.86);
    }
  </style>
  <body>
    <div class="container">
      <header>
        <h1 class="text-center">Agregar Productos</h1><br><br><br>
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
            <label for="proveedor">Proveedor</label>
            <input autocomplete="off" class="form-control" id="proveedor" type="text" name="proveedor" value="">
          </div>
          <br>


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
