<?php
require "conexion.php";

if (isset($_GET['id_prod'])) {

  $id = $_GET['id_prod'];
  $buscarId = "SELECT * FROM productos WHERE id_prod LIKE $id;";
  $stmt = $conn->prepare($buscarId);
  $stmt->execute();
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);


  $directorioDestino = $fila['imagen'];
  $opcionCategoria = $fila['categoria'];

}


if (isset($_POST['btn-modificar'])) {

  if ($opcionCategoria == "" || $opcionCategoria == "Sin categoria") {
    $opcionCategoria = $_POST['categoria'];
  }

  $nombre_prod = $_POST['nombre_prod'];
  $precio_costo = $_POST['precio_costo'];
  $precio_venta = $_POST['precio_venta'];
  $proveedor = $_POST['proveedor'];
  $oferta = $_POST['check-oferta'];


  //if (isset($_FILES['img-producto']['name'])) {


  //  $directorioDestino = "img/imagenSubidas/";
  //  $tmp_name = $_FILES['img-producto']['tmp_name'];

  //  $imgNombre = $_FILES['img-producto']['name'];
  //  $imagenCopiada = $directorioDestino.=$imgNombre;
  //  move_uploaded_file($tmp_name, $imagenCopiada);

  //}


  $query = "UPDATE productos SET nombre_prod='$nombre_prod', precio_costo='$precio_costo',
            precio_venta='$precio_venta', proveedor='$proveedor', imagen='$directorioDestino', categoria='$opcionCategoria', oferta='$oferta' WHERE id_prod=$id;";

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
      background-color: rgb(161, 161, 161);
    }
    </style>
    <div class="container">
      <header>
        <h1>Modificar</h1>

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
            <label for="precio_venta">Precio de Venta:</label>
            <input required autocomplete="off" class="form-control" id="precio_venta" type="number" step="any" name="precio_venta" value="<?php echo $fila['precio_venta'] ?>">
          </div>

          <div class="form-group">
            <label for="proveedor">Proveedor</label>
            <input autocomplete="off" class="form-control" id="proveedor" type="text" name="proveedor" value="<?php echo $fila['proveedor'] ?>">
          </div>
          <br>
          <select class="custom-select" name="categoria">

            <option value="sin categoria">Seleccionar categoria</option>
            <option value="fiambreria">Fiambreria</option>
            <option value="almacen">Almacen</option>
            <option value="lacteos">Lacteos</option>
            <option value="congelados">Congelados</option>
            <option value="bebidas sin alcohol">Bebidas sin alcohol</option>
            <option value="bebidas con alcohol">Bebidas con Alcohol</option>
          </select>


          <div class="d-flex justify-content-center">
            <div class="custom-control custom-checkbox">
              <input type="checkbox"  name="check-oferta" class="custom-control-input" id="customCheck1" value="1">
              <label class="custom-control-label" for="customCheck1">Quieres ponerlo en OFERTA?</label>
            </div>
          </div>


          <input id="btn-agregar" class="btn btn-warning float-right" type="submit" name="btn-modificar" value="Guardar Cambios">

        </form>

      </section>

    </div>



    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
