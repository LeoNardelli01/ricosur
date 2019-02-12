<?php
require "conexion.php";
if (isset($_GET['id'])) {

  $id = $_GET['id'];
  $buscarId = "SELECT * FROM proveedores WHERE id LIKE $id;";
  $stmt = $conn->prepare($buscarId);
  $stmt->execute();
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);

}

if (isset($_POST['btn-eliminar'])) {
  $query = "DELETE FROM proveedores WHERE id=$id;";
  $stmtEliminar = $conn->prepare($query);
  $stmtEliminar->execute();

  header("Location: ../index.php");
}
//DELETE FROM `mydb`.`productos` WHERE `id_prod`='25';



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar producto</title>
</head>
<style media="screen">
body {
  background-color: rgba(237, 168, 14, 0.86);
}
</style>
  <body>
    <h1 class="text-center">Eliminar</h1><br><br><br>
    <a href="../index.php" class="btn btn-success">Volver</a>
    <table class='table table-striped'>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre del producto</th>
                    <th>Precio Costo</th>
                    <th>Proveedor</th>
                    <th>Ultima mod.</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $fecha = explode(" ", $fila['ultima_mod']);
                      $fecha_final = date("d/m/y", strtotime($fecha[0]));
                    ?>

                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombre_prod'] ?></td>
                    <td><?php echo $fila['precio_costo'] ?></td>
                    <td><?php echo $fila['proveedor'] ?></td>
                    <td><?php echo $fecha_final ?></td>
                  </tr>
                </tbody>
              </table>

              <form class="" action="" method="post">
                <input  class="btn btn-danger d-flex justify-content-end" type="submit" name="btn-eliminar" value="ELIMINAR">
              </form>

              <script src="../assets/js/jquery.min.js"></script>
              <script src="../assets/js/popper.min.js"></script>
              <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
