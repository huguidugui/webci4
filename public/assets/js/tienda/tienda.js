$(document).ready(function() {
  
    //IMPORTANTAE Contar solo los ACTIVOS
    load_data_table(1, 'tienda');
  
    //HACER FUNCIONAR BIEN LOS NUMEROS
    $(document).on("click", ".pagination li a", function(event){
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        console.log(page);
        $('#preloader').addClass('preloader-active');
        $('#preloader-texto').append('<p>Página # ' + page + '</p>');
  
        $('html, body').animate({
          scrollTop: 0
        }, 1500, 'easeInOutExpo');
  
        setTimeout(function () {
          $('#preloader').removeClass('preloader-active');
          $('#preloader-texto').empty();
        }, 2000);
  
        setTimeout(function () {
            load_data_table(page, 'tienda', '');
          return false;
        }, 1500);
  
              
    });
  
     
    
      $("#buscar-blog").click(function(e){
          e.preventDefault();
          var base_url = $("#baseurl").val();
          var buscar = $("#m_search").val();
    
          if($('#post-data').length){
              $.ajax({
                 type: 'POST',
                 url: base_url + 'ajax/buscarBlog',
                 dataType: "json",
                 data: {buscar: buscar},
                 success: function(resp){    
                   // Borra busquedas previas para no juntar los resultados
                   $(".busquedas-previas").remove();
                   // Inserta antes una row que viene del Ajax.php
                   $( resp.html ).insertBefore( "#busqueda" );
                 }
               });
          }else{
            console.log("bai bai tacubaya");
          }
      });
    
    }); // document ready
  
  
  function load_data_table( page, table ) {
      
      var hostname = $("#baseurl").val();
  
      $.ajax({
          url: hostname + "ajax/paginationTienda/" + page + "/" + table,
          method:"GET",
          dataType:"json",
          success:function(resp) {
            console.log((resp.data).length);
              if( (resp.data).length == 0 ) {
                $('#post-data').html( sinArticulos() );
              } else {
                //Carga la tabla en el id especificado
                $('#post-data').html( mostrarEntradas(resp.data) );
                  //Carga los links de pagination que vienen del backend
                $('#links-paginacion').html(resp.links_paginacion);
              }
          }
      });
  }
  
  function mostrarEntradas( datos ) {
    var hostname = $("#baseurl").val();
    var salida = "";
    $.each( datos, function( key, value ) {

      salida += "<div class='col-lg-4 col-md-6 d-flex align-items-stretch'>" +
                    "<div class='member'>" +
                        "<div class='member-img'>" +
                            "<img src='"+ hostname +"assets/img/tienda/principal/" + value.foto_principal + "'" + " class='img-fluid' >" +
                            "<div class='d-flex flex-column justify-content-center align-items-center social'>" +
                              "<strong>" +
                                "$ " + value.precio +
                              "</strong>" +
                              "<a href='" + hostname +"tienda/articulo/" + value.identificador + "'" + " class='btn btn-success'>Ver detalles</a>" +
                            "</div>" +
                        "</div>" +
                        "<div class='member-info'>" +
                            "<h4 class='text-center'>" + value.articulo + "</h4>" +
                            /* "<span>" + value.descripcion_corta + "</span>" +
                            "<p></p>" + */
                        "</div>" +
                    "</div>" +
                "</div>";
    });
  
  
    return salida;
  } 

  function sinArticulos() {
    var caca = "";
      caca += "<div class='col-12'>" +  
                "<div class='jumbotron'>" + 
                    "<h1 class='display-4'>Hola! <br>Por el momento se están preparando las mejores ofertas<br> ¡Pronto estarán aqui! :)</h1>" +
                  "</div>"+
              "</div>";  
    return caca;
  } 

/*   <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> */