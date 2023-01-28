<section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-web">Webs</li>
              <li data-filter=".filter-personal">Personales</li>
            </ul>
          </div>
        </div> <!-- End row -->

        <div class="row portfolio-container">

          <?php foreach($proyectos as $proyecto) { ?>
              <div class="col-lg-4 col-md-6 <?php echo $proyecto->filter_js;?>">
                <div class="portfolio-item">
                  <img src="assets/img/portfolio/proyectos/<?php echo $proyecto->imagen?>" class="img-fluid" alt="<?php echo $proyecto->alt?>" title="<?php echo $proyecto->title_generico?>">
                  <div class="portfolio-info">
                    <h3>
                      <a href="assets/img/portfolio/proyectos/<?php echo $proyecto->imagen?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $proyecto->title_generico?>"><?php echo $proyecto->nombre?></a></h3>
                    <div class="link-detalle-proyecto d-flex justify-content-center">
                      <?php if ( $proyecto->identificador != '' ) { ?>
                        <a class="d-flex align-self-center py-3" 
                          href="<?php echo base_url();?>portafolio/detalle/<?php echo $proyecto->identificador?>" 
                          title="<?php echo $proyecto->title_detalle;?>">
                            Ver detalle
                            <i class="bx bx-link"></i>
                        </a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
          <?php } ?>

        </div> <!-- End row -->

      </div>
    </section>