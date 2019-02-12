
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Panaderia Nuevo Modelo</title>
  </head>
  <body>
    <style media="screen">

      body {
        background-color: rgba(237, 168, 14, 0.86);
      }

      #caja_busqueda{
        color: black;
        font-size: 20px;
        font-weight: bold;
      }


    </style>
    <div class="container-fluid">
      <header>
        <h1 class="text-center">Nuevo Modelo</h1>
        <h6 class="text-center">Buscador de Productos</h6><br><br><br>
      </header>

      <section class="buscar">
        <div class="form-group">
          <input id="caja_busqueda" class="form-control" type="text" name="caja_busqueda" value="" placeholder="Nombre del producto o Proveedor">
        </div>
      </section>

      <div class="container-fluid">
        <a  class="btn btn-success" href="agregar.php">Agregar Producto</a>
      </div>
      <br><br>
      <section class="mostrar-datos"><!-- DATOS--></section>

    </div> <!--FIN container-fluid -->


  <script src="js/index.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
