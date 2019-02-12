<?php

require "conexion.php";

$salida = "";
$query = "SELECT * FROM proveedores ORDER BY ultima_mod DESC;";


if (isset($_GET['buscar'])) {
  $buscar = $_GET['buscar'];
  $query = "SELECT * FROM proveedores WHERE nombre_prod LIKE '%".$buscar."%'
            OR proveedor LIKE '%".$buscar."%';";
}


$stmt = $conn->prepare($query);
$resultado = $stmt->execute();
$filas = $stmt->rowCount();


if ($filas > 0) {
  $salida.= "<table class='table table-striped'>
              <thead>
                <tr>

                  <th>Nombre del producto</th>
                  <th>Precio Costo</th>
                  <th>Proveedor</th>
                  <th>Ultima mod.</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>";


  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
    $fecha = explode(" ", $fila['ultima_mod']);

    $fecha_final = date("d/m/y", strtotime($fecha[0]));




    $salida.= "<tr>
              <td>".$fila['nombre_prod']."</td>
              <td>$".$fila['precio_costo']."</td>
              <td>".$fila['proveedor']."</td>
              <td>".$fecha_final."</td>
              <td>

                <a class='btn btn-warning' href='php/modificar.php?id=".$fila['id']."'>&#9998;</a>

                <a class='btn btn-danger' href='php/eliminar.php?id=".$fila['id']."'>&times;</a>

              </td>
            </tr>";
  }

  $salida.= "</tbody></table>";

}else{
  $salida.= "<h3 class='bg-danger text-white '>No hay resultados</h3>";
}

echo $salida;


$conn = null;

?>
