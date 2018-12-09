$(document).ready(function(){

  $("#slider-prod > div:gt(0)").hide();

  setInterval(function(){
    $('#slider-prod > div:first')
    .slideToggle(2000)
    .next()
    .slideToggle(2000)
    .end()
    .appendTo('#slider-prod');
  }, 7000);



 var now = new Date();
 var mes = now.getMonth();
 var dia = now.getDay();
 var numeroDia = now.getDate();
 var hora = now.getHours();
 var minuto = now.getMinutes();

 var meses = ["Enero",
              "Febrero",
              "Marzo",
              "Abril",
              "Mayo",
              "junio",
              "Julio",
              "Agosto",
              "Septiembre",
              "Octubre",
              "Noviembre",
              "Diciembre"
              ];

var texto = meses[mes] + " en Rico Sur.";
$("#mes-oferta").append(texto);

var dias = ["Domingo",
            "Lunes",
            "Martes",
            "Miercoles",
            "Jueves",
            "Viernes",
            "Sabado"
            ];

var tituloDia = "Ofertas del " + dias[dia] + " " + numeroDia;
$("#mostrar-dia").append(tituloDia);



//      --RELOJ DIGITAL--

  var actualizarHora = function(){
    var fechaReloj = new Date(),
        horasReloj = fechaReloj.getHours(),
        ampm,
        minutosReloj = fechaReloj.getMinutes(),
        segundosReloj = fechaReloj.getSeconds(),
        diaSemanaReloj = fechaReloj.getDay(),
        diaReloj = fechaReloj.getDate(),
        mesReloj = fechaReloj.getMonth(),
        yearReloj = fechaReloj.getFullYear();


    var pHoras = $(".horas"),
        pAMPM = $(".ampm"),
        pMinutos = $(".minutos"),
        pSegundos = $(".segundos"),
        pDiaSemana = $(".diaSemana"),
        pDia = $(".dia"),
        pMes = $(".mes"),
        pYear = $(".year");


    var semanaReloj =['Domingo',
                      'Lunes',
                      'Martes',
                      'Miercoles',
                      'Jueves',
                      'Viernes',
                      'Sabado',
                      ];
    var mesesReloj = ["Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                    ];

    pDiaSemana.html(semanaReloj[diaSemanaReloj]);
    pDia.html(diaReloj);
    pMes.html(mesesReloj[mesReloj]);
    pYear.html(yearReloj);

    if (horasReloj >=12) {
        horasReloj = horasReloj - 12;
        ampm = 'PM';
    }else {
      ampm = 'AM';
    }

    if (horasReloj == 0) {
      horasReloj = 12;
    }

    pHoras.html(horasReloj);
    pAMPM.html(ampm);

    if (minutosReloj < 10) {
      minutosReloj = '0' + minutosReloj;
    }
    if (segundosReloj < 10) {
      segundosReloj = '0' + segundosReloj;

    }

    pMinutos.html(minutosReloj);
    pSegundos.html(segundosReloj);

  };


  actualizarHora();
  var intervalo = setInterval(actualizarHora, 1000);



  /*  ANIMACION categorias*/

  function animarCategoria(){
    $("#lista-categorias > li:gt(0)").hide(500);

    $("#lista-categorias > li:first")
             .fadeIn(2500)
             .next()
             .fadeOut(2500)
             .end()
             .appendTo("#lista-categorias");

  }

  animarCategoria();
  var animacionCategorias = setInterval(animarCategoria, 7000);


});
