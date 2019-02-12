<?php

require "conexion.php";

$directorioDestino = "";

if (isset($_POST['btn-agregar'])){

  $nombre_prod = $_POST['nombre_prod'];
  $precio_costo = $_POST['precio_costo'];
  $proveedor = $_POST['proveedor'];


  $query = "INSERT INTO proveedores (nombre_prod, precio_costo, proveedor)
            VALUES ('$nombre_prod', '$precio_costo', '$proveedor');";

  $stmt = $conn->prepare($query);
  $stmt->execute();

  $conn = null;

  header("Location: ../NuevoModeloSoft/index.php");
}


?>
