<?php

require "conexion.php";
$nombre_prod;
$precio_costo;
$precio_venta;
$proveedor;


if (isset($_POST['btn-agregar'])){
  $nombre_prod = $_POST['nombre_prod'];
  $precio_costo = $_POST['precio_costo'];
  $precio_venta = $_POST['precio_venta'];
  $proveedor = $_POST['proveedor'];

  $query = "INSERT INTO productos (nombre_prod, precio_costo, precio_venta, proveedor)
  VALUES ('$nombre_prod', '$precio_costo', '$precio_venta', '$proveedor');";

  $stmt = $conn->prepare($query);
  $stmt->execute();

}


?>
