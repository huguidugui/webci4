$(document).ready(function(){
    $("#siguiente").val(0);
    $("#bandera").val('mas');
    
    $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 220) {
        var valor_inicial = parseInt($("#siguiente").val());
        var base_url = $("#baseurl").val();
        var bandera = $("#bandera").val();

        if(bandera == "mas"){
          $.ajax({
             type: 'POST',
             url: base_url + 'ajax/cargar_lenguajes',
             dataType: "json",
             async: false,
             data: {valor_inicial: valor_inicial, bandera: bandera},
            beforeSend: function () { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
                $('#spinner').removeClass('d-none')
            },
            success: function(resp){ 
                $("#siguiente").val(resp.siguiente);
                $("#bandera").val(resp.bandera);
                $("#post-data").append(resp.html);
             },
             complete: function () { 
                $('#spinner').addClass('d-none')
             }
           })
         } else {
           $("#bandera").val(bandera);
           $('#son-todos-fin').removeClass('d-none');
         }
      }
    });


  // SUBIR AL DAR CLICK EN LENGUAJE DE PROGRAMACIÓN
  $(document).on("click", ".lenguaje", function(event){
      event.preventDefault();
      var idLenguaje = $(this).data("id-lenguaje");
      var nameLenguaje = $(this).data("name-lenguaje");
      var base_url = $("#baseurl").val();
      const d = new Date();
      let currentYear = d.getFullYear();

      //Mostrar PRELOADER con el nombre del lenguaje seleccionado
      $('#preloader').addClass('preloader-active');
      $('#preloader-texto').append('<p>Veamos la info de: ' + nameLenguaje + '</p>');

      //Scroll para arriba
      $('html, body').animate({
        scrollTop: 200
      }, 1500, 'easeInOutExpo');

      $.ajax({
          type: 'POST',
          url: base_url + 'ajax/buscar_lenguaje',
          dataType: "json",
          async: true,
          data: { id_lenguaje: idLenguaje },
          success: function(resp){
            let img_info = JSON.parse( resp.lenguaje.logo_json);
            let antiguedad = currentYear - resp.lenguaje.creacion;
            $("#nombre-lenguaje").text(resp.lenguaje.nombre);
            $("#creacion-lenguaje").text(resp.lenguaje.creacion);
            $("#antiguedad-lenguaje").text(antiguedad);
            $("#autor-lenguaje").text(resp.lenguaje.creador);
            $("#logo-lenguaje").attr("src", base_url + "assets/img/lenguajes/" + img_info.nombre);
            $("#logo-lenguaje").attr("alt", img_info.alt);
            $("#logo-lenguaje").attr("title", img_info.title);
          }
      });

      //Tiempo para quitar el PRELOADER
      setTimeout(function () {
        $('#preloader').removeClass('preloader-active');
        $('#preloader-texto').empty();
      }, 2000);            
  });

  
  }); // document ready