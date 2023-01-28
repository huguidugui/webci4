<!-- Start latest news -->
<section id="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area">
          <h2 class="title">Cotizador</h2>
          <span class="line"></span>
          <p  id="total_movil">
              Total de cotización: $ <strong><span id="total_cotizacion"></span></strong> <br>
              Entrega:<strong><span id="total_dias"> 5 días</span></strong>
          </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="latest-news-content">
          <div class="row">
            <div class="col-md-4 text-center">
              <div class="card-cotizador wow fadeInLeft">
                <header class="text-center">
                  Ubica el giro de tu web
                </header>
                <p>
                  <ul>
                    <li>Restaurante</li>
                    <li>Agencia</li>
                    <li>Portafolio</li>
                    <li>CV en línea</li>
                    <li>Landing page</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card-cotizador wow fadeInRight">
                <header class="text-center">
                  Comenzando
                </header>
                <p>La cotización comienza con $2500, incluye un sitio web estático con 4 secciones: Inicio, Sobre nosotros, Servicios y Contacto (dirección, mail, teléfonos y mapa )</p>
                <input type="hidden" class="para_cotizar" name="inicio_cotizacion" value="2500">
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-cotizador wow fadeInLeft">
                <header class="text-center">
                  Secciones
                </header>
                <p>¿Cuántas secciones necesitas además de las básicas? Por ejemplo, carrusel de imágenes, mostrar tus trabajos, mostrar logos de tus clientes, mostrar los integrantes de tu equipo </p>
                <select class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group para_cotizar" id="secciones" name="secciones">
                  <option value="0">Selecciona una opción</option>
                  <option value="400">3 Secciones</option>
                  <option value="500">4 Secciones</option>
                  <option value="650">5 Secciones</option>
                  <option value="800">6 Secciones</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 text-center">
              <div class="card-cotizador wow fadeInRight">
                <header class="text-center">Formularios</header>
                <p>Un formulario básico de contacto tiene los campos: Nombre, teléfono o mail y el mensaje.</p>
                <select class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group para_cotizar" id="formularios" name="formularios">
                  <option value="0">Selecciona una opción</option>
                  <option value="250">1 formulario básico</option>
                  <option value="350">1 formulario de 5 a 10 campos</option>
                  <option value="500">1 formulario para subir archivo (documento, foto, imagen etc.)</option>
                  <option value="600">Formulario de encuesta o cuestionario</option>
                </select>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="card-cotizador wow fadeInRight">
                <header class="text-center">
                  Blog/Noticias
                </header>
                <p> Blog / Noticias</p>
                <label class="radio-inline">
                  <input  value="800" type="radio" name="blog">
                    Sí
                </label>
                <label class="radio-inline">
                  <input id="no_blog" value="0" type="radio" name="blog">
                    No
                </label>
              </div>
            </div> -->

            <div class="col-md-4">
              <div class="card-cotizador wow fadeInLeft">
                <header class="text-center">
                  Catálago
                </header>
                <p> ¿Tienes fotos o imágenes de tus productos? ¿Quieres mostrar su detalle, fotos y precio? La sección de catálago te ayudará a msotrar tus productos de forma dinámica</p>
                <label class="radio-inline">
                  <input value="600" type="radio" name="catalago">
                    Sí
                </label>
                <label class="radio-inline">
                  <input id="no_catalago" value="0" type="radio" name="catalago">
                    No
                </label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card-cotizador wow fadeInRight">
                <header class="text-center">
                  Cuéntame :D
                </header>
                <p>
                  Envíame un mail a ringhugos@gmail.com o un mensaje desde el formulario de contacto y con gusto te
                  hago un presupuesto personalizado. 
                </p>
                <p>
                  <a href="<?php echo base_url();?>inicio/contacto/1"><button class="btn btn-success center-block">Enviar mensaje</button></a>
                </p>
              </div>
            </div>
            
            <!-- <div class="col-md-4">
              <div class="card-cotizador wow fadeInRight">
                <div class="checkbox">
                  <label><input type="checkbox" class="someCat" name="someCat" value="1">Option 1</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" class="someCat" name="someCat" value="1">Option 2</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" class="someCat" name="someCat" value="1">Option 3</label>
                </div>
              </div>
                 
            </div> -->
            
          </div>
        </div> <!-- collll -->
      </div>
  </div>
</div>
</section>
<!-- End latest news -->
