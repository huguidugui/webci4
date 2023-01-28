<section style="margin-bottom:10px;" class="container">
    <article class="row">
        <div style="padding:0 7px" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="row styleRow miCard">
                <div class="miCard col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="miCard1">
                        <a href="<?php echo base_url();?>inicio/habilidades">
                            <img class="imagenBolita img-responsive img-circle center-block" src="assets/images/homeSlider/menuImages/habilidades.jpg">
                        </a>
                    </div>
                    <div class="miCard2">
                        <a href="<?php echo base_url();?>inicio/habilidades">
                            Habilidades
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 columnaIzquierda">
                    <div id="cardHabilidades">
                        <div class="">
                            Te invito a conocer el porcentaje de las habilidades con las que tengo experiencia, entre las que se encuentran PHP, MySQL, HTML-CSS, JQuery y ...
                        </div>
                        <div class="text-center">
                            <a class="backk" href="<?php echo base_url();?>inicio/habilidades">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div style="padding:0 7px" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="row styleRow miCard">
                <div class="miCard col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="miCard1">
                        <a href="<?php echo base_url();?>inicio/portafolio">
                            <img class="imagenBolita img-responsive img-circle center-block" src="assets/images/homeSlider/menuImages/portfolio.png">
                        </a>
                    </div>
                    <div class="miCard2">
                      <a href="<?php echo base_url();?>inicio/portafolio">
                          Portafolio
                      </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 columnaIzquierda">
                    <div id="cardPortafolio">
                        <div class="">
                            Los proyectos en los que he participado han sido tanto de front como de backend. Además algunos los mini-sistemas hechos con Codeigniter...
                        </div>
                        <div class="backk text-center">
                            <a href="<?php echo base_url();?>inicio/portafolio">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<section style="margin-bottom:10px;" class="container">
    <article class="row">
        <div style="padding:0 7px" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="row styleRow miCard">
                <div class="miCard col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="miCard1">
                        <a href="<?php echo base_url();?>inicio/pda">
                            <img class="imagenBolita img-responsive img-circle center-block" src="assets/images/homeSlider/menuImages/pda.png">
                        </a>
                    </div>
                    <div class="miCard2">
                        <a href="<?php echo base_url();?>inicio/pda">
                            PDA
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 columnaIzquierda">
                    <div id="cardPda">
                        <div class="">
                            El perfil PDA que describe al 100% mi forma de trabajar, relacionarme y expresar mis ideas. Obtenido en los test de OCC...
                        </div>
                        <div class="backk text-center">
                            <a href="<?php echo base_url();?>inicio/pda">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding:0 7px" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="row styleRow miCard">
                <div class="miCard col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="miCard1">
                        <a href="<?php echo base_url();?>inicio/extras">
                            <img class="imagenBolita img-responsive img-circle center-block" src="assets/images/homeSlider/menuImages/extras.png">
                        </a>
                    </div>
                    <div class="miCard2">
                        <a href="<?php echo base_url();?>inicio/extras">
                            Extras
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 columnaIzquierda">
                    <div id="cardExtras">
                        <div class="">
                              Algunos aspectos extras interesantes que complementan mi perfil como programador/desarrollador web
                        </div>
                        <div class="backk text-center">
                            <a href="<?php echo base_url();?>inicio/extras">
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<section style="margin-bottom:10px;" class="container">
    <article class="row">
          <div style="padding-left:13px; padding-right:5px; margin-bottom:10px" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <ul class="bxslider">
                  <li><img src="assets/images/homeSlider/curso_slide_1.jpg"/></li>
                  <li><img src="assets/images/homeSlider/curso_slide_2.jpg"/></li>
                  <li><img src="assets/images/homeSlider/curso_slide_3.jpg"/></li>
                  <li><img src="assets/images/homeSlider/curso_slide_4.jpg"/></li>
                  <li><img src="assets/images/homeSlider/curso_slide_5.jpg"/></li>
                  <li><img src="assets/images/homeSlider/curso_slide_6.jpg"/></li>

              </ul>
          </div>


    </article>
</section>

<!-- articulo para leer -->
<section style="margin-bottom:10px; padding: 0 21px" class="container">
      <article class="row">
            <?php foreach($articulos as $articulo){?>
                <div  class="col-xs-12 col-sm-3 col-md-3 col-lg-3 articulosPadding">
                    <div class="estilosFooter borderRadius articulosDiv">
                        <header class="miHeader">
                            <h4 class="titulo text-center">
                                <?php echo substr($articulo->titulo, 0, 30) . "..."; ?>
                            </h4>
                        </header>
                        <div style="padding: 20px; min-height:160px" class="text-center">
                            <a href="<?= $articulo->link?>"><img class="img-responsive center-block img-thumbnail" width="155" src="assets/images/articulos/<?= $articulo->imagen?>" ></a>
                        </div>
                        <footer class="leer text-center">
                            <a href="<?= $articulo->link?>">
                              Quiero leerlo :D
                            </a>
                        </footer>
                    </div>
                </div>
            <?php }?>

      </article>
</section>
