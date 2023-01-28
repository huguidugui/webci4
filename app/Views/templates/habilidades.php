<section id="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area">
          <h2 class="title">Habilidades</h2>
          <span class="line"></span>
          <p>Las herramientas de software que principalmente manejo son:</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="latest-news-content">
          <div class="row">
            <?php foreach($habilidades as $habilidad){?>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member single-team-member-custom">
                      <div class="team-member-name">
                          <p class="titulo"><?php echo $habilidad->habilidad?></p>
                      </div>
                       <div class="team-member-name">
                         <p style="text-align: left !important"><?php echo $habilidad->descripcion?></p>
                         <div class="team-member-link">
                           <span id="porcentaje<?php echo $habilidad->id?>"> 0% </span>
                         </div>
                       </div>

                    </div>
                  </div>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="feature-content">
          <div class="row">
            <div class="col-xs-12 col-md-3 col-sm-6">
              <div class="single-feature wow zoomIn">
                <h4 class="feat-title">Habilidades</h4>
                <p>Te invito a conocer el detalle de las tecnologías con las que tengo experiencia, entre las que se encuentran PHP, MySQL, HTML-CSS, JQuery</p>
                <a href="<?php echo base_url();?>inicio/habilidades"><button class="btn btn-danger col-xs-12 col-sm-12 col-md-12 col-lg-12">Ver más..</button></a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hide">
              <div class="single-feature wow zoomIn">

                <h4 class="feat-title">Portafolio</h4>
                <p>Los proyectos en los que he participado han sido tanto de front como de backend. También algunos los mini-sistemas que he realizado con Codeigniter</p>
                <a href="#"><button class="btn btn-danger col-xs-12 col-sm-12 col-md-12 col-lg-12">Ver más..</button></a>
              </div>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6">
              <div class="single-feature wow zoomIn">
                <h4 class="feat-title">PDA</h4>
                <p>El perfil PDA que describe al 100% mi forma de trabajar, relacionarme y expresar mis ideas, lo obtuve en OCC</p>
                <a href="<?php echo base_url();?>inicio/pda"><button class="btn btn-danger col-xs-12 col-sm-12 col-md-12 col-lg-12">Ver más..</button></a>
              </div>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6 hide">
              <div class="single-feature wow zoomIn">
                <h4 class="feat-title">Extras</h4>
                <p>Algunos aspectos extras interesantes que complementan mi perfil como programador/desarrollador web <p>
                  <a href="#"><button class="btn btn-danger col-xs-12 col-sm-12 col-md-12 col-lg-12">Ver más..</button></a>
              </div>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6">
              <div class="single-feature wow zoomIn">
                <h4 class="feat-title">Blog</h4>
                <p>A lo largo de mi vida profesional escribo sobre los temas que voy aprendiendo, los hago tutoriales y los comparto en mi blog</p>
                  <a href="<?php echo base_url();?>blog"><button class="btn btn-danger col-xs-12 col-sm-12 col-md-12 col-lg-12">Ir al blog</button></a>
              </div>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6">
              <div class="single-feature wow zoomIn">
                <h4 class="feat-title">Descargar CV en PDF</h4>
                <p>¿Te interesa mi perfil? Descarga mi CV en formato PDF. También estoy en la modalidad de freelance<br><br></p>
                <a target="_blank" href="<?php echo base_url();?>assets/images/cv-HugoMartinez2019.pdf"><button class="btn btn-danger col-xs-12 col-sm-12 col-md-12 col-lg-12">Descargar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End latest news -->
