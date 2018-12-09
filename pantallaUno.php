<?php
require "php/pantalla-uno.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pantalla UNO</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pantallaUno.css">
  </head>

  <body>

      <div class="container-fluid fondo">
        <header>


          <div class="wrap" id="reloj">
            <div class="widget">
              <div class="fecha">
                <p id="diaSemana" class="diaSemana"></p>
                <p id="dia" class="dia"></p>
                <p>de </p>
                <p id="mes" class="mes"></p>
                <p>del </p>
                <p id="year" class="year"></p>
              </div>
              <div class="reloj">
                <p id="horas" class="horas"></p>
                <p>:</p>
                <p id="minutos" class="minutos"></p>
                <p>:</p>
                <div class="caja-segundos">
                  <p id="ampm" class="ampm"></p>
                  <p id="segundos" class="segundos"></p>
                </div>
              </div>
            </div>
            <h1 id="mes-oferta" class="text-center"></h1>
          </div>




        </header>

        <div class="medio">

          <div class="tarjetas">
            <p>ACEPTAMOS</p>
            <p id="todas">TODAS LAS TARJETAS DE</p>
            <p>DEBITO</p>

          </div>

          <div class="piccardelli">

            <h2>PICCARDELLI p/2</h2>
            <p>$500.00</p>
            <h2>con dos cervezas de 473cc de REGALO!!</h2>
          </div>

        </div>

        <div class="lista-categorias">
            <ul id="lista-categorias">

              <?php
                if ($todos == NULL) {
                  echo "<li>No hay nada que mostrar...</li>";
                } else{
                  for ($i=0; $i < count($todos); $i++) {
                    echo "
                          <li>".$todos[$i]["nombre_prod"]."<br><span class='precio-categorias'>$ ".$todos[$i]["precio_venta"]."</span></li>
                         ";
                  }
                }
              ?>

            </ul>
        </div>


        <div id="slider-prod">
          <h4 class="text-center" id="mostrar-dia"></h4>
          <?php

          if ($producto == NULL) {
              echo "<br>
                      <p>Se terminaron las ofertas de hoy...</p>";
            } else{
              for ($i=0; $i < count($producto); $i++) {
                echo "
                        <div class='card'>

                          <div class='card-body'>
                            <p id='titulo-producto' class='card-text text-center'>".$producto[$i]["nombre_prod"]."</p>
                          </div>

                          <img src=".$producto[$i]['imagen']." alt='Card image'>
                          <div class='card-body '>
                            <p  id='precio' class='card-text text-right font-weight-bold'>$ ".$producto[$i]['precio_venta']."</p>
                          </div>
                        </div>
                  ";
              }
            }
          ?>

        </div>

    </div>
    <!-- Bootstrap y Jquery-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/pantallaUno.js"></script>


  </body>
</html>
