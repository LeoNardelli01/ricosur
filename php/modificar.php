<?php
require "conexion.php";

if (isset($_GET['id'])) {

  $id = $_GET['id'];
  $buscarId = "SELECT * FROM proveedores WHERE id LIKE $id;";
  $stmt = $conn->prepare($buscarId);
  $stmt->execute();
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);


}


if (isset($_POST['btn-modificar'])) {


  $nombre_prod = $_POST['nombre_prod'];
  $precio_costo = $_POST['precio_costo'];
  $proveedor = $_POST['proveedor'];



  $query = "UPDATE proveedores SET nombre_prod='$nombre_prod', precio_costo='$precio_costo',
            proveedor='$proveedor' WHERE id=$id;";

  $stmtModificar = $conn->prepare($query);
  $stmtModificar->execute();

  $conn = null;

  header("Location: ../index.php");
}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto</title>
  </head>
  <body>
    <style media="screen">
    body {
      background-color: rgba(237, 168, 14, 0.86);
    }
    </style>
    <div class="container">
      <header>
        <h1 class="text-center">Modificar</h1><br><br><br>

      </header>
      <div class="">
        <a class="btn btn-success" href="../index.php">Volver al buscador</a>
      </div>
      <section>
        <form  id="form-agregar" class="" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nombre_prod">Producto:</label>
            <input required autocomplete="off" class="form-control" id="nombre_prod" type="text" name="nombre_prod" value="<?php echo $fila['nombre_prod'] ?>">
          </div>

          <div class="form-group">
            <label for="precio_costo">Precio de Costo:</label>
            <input required autocomplete="off" class="form-control" id="precio_costo" type="number" step="any" name="precio_costo" value="<?php echo $fila['precio_costo'] ?>">
          </div>

          <div class="form-group">
            <label for="proveedor">Proveedor</label>
            <input autocomplete="off" class="form-control" id="proveedor" type="text" name="proveedor" value="<?php echo $fila['proveedor'] ?>">
          </div>
          <br>

          <input id="btn-agregar" class="btn btn-danger float-right" type="submit" name="btn-modificar" value="Guardar Cambios">

        </form>

      </section>

    </div>



    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
