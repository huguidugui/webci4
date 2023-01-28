$(document).ready(function() {
  
  //IMPORTANTAE Contar solo los ACTIVOS
  load_data_table(1, 'blog');

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
          load_data_table(page, 'blog', '');
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
        url: hostname + "ajax/paginationBlog/" + page + "/" + table,
        method:"GET",
        dataType:"json",
        success:function(resp) {
            //Carga la tabla en el id especificado
            $('#post-data').html( mostrarEntradas(resp.data) );

            //Carga los links de pagination que vienen del backend
            $('#links-paginacion').html(resp.links_paginacion);
        }
    });
}

function mostrarEntradas( datos ) {
  var hostname = $("#baseurl").val();
  var salida = "";
  $.each( datos, function( key, value ) {
    salida += "<article class='entry'> " +
                "<div class='entry-img'> " +
                    "<img " +
                        "class='img-fluid' " +
                        "src='"+ hostname +"assets/img/blog/" + value.imagen + "'" +
                        "/> " +
                "</div> " +
                "<h2 class='entry-title'>" +
                    "<a href='" + hostname + 'blog/entrada/' + value.identificador + "'>" +
                        value.titulo +
                    "</a>" +
                "</h2>" +
              "</article>";
  });


  return salida;
} 