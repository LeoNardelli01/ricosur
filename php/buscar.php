<?php

require "conexion.php";

$salida = "";
$query = "SELECT * FROM productos ORDER BY id_prod DESC LIMIT 10;";


if (isset($_GET['buscar'])) {
  $buscar = $_GET['buscar'];
  $query = "SELECT * FROM productos WHERE nombre_prod LIKE '%".$buscar."%'
            OR proveedor LIKE '%".$buscar."%';";
}


$stmt = $conn->prepare($query);
$resultado = $stmt->execute();
$filas = $stmt->rowCount();


if ($filas > 0) {
  $salida.= "<table class='table table-striped'>
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre del producto</th>
                  <th>Precio Costo</th>
                  <th>Precio Venta</th>
                  <th>Proveedor</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>";


  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
    $salida.= "<tr>
              <th scope='row'>".$fila['id_prod']."</th>
              <td>".$fila['nombre_prod']."</td>
              <td>$".$fila['precio_costo']."</td>
              <td>$".$fila['precio_venta']."</td>
              <td>".$fila['proveedor']."</td>
              <td>
                <button type='button' class='close bg-danger' data-dismiss='modal aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </td>
            </tr>";
  }

  $salida.= "</tbody></table>";

}else{
  $salida.= "No se encontraron coincidencias";
}

echo $salida;

$conn = null;

?>
