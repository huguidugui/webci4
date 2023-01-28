<input type="hidden" id="numeroDePaginacion" name="numeroDePaginacion" value="<?php echo $numeroDePaginacion;?>">

<section class="container">
    <article class="row">
          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 articulo">
                <div class="row">
                    <?php foreach ($tips as $tip) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 articulo">
                        <div class="envoltura">
                            <div class="imagen">
                                <img class="img-responsive" src="<?php echo base_url();?>assets/images/tips/<?php echo $tip->imagen?>">
                            </div>
                            <div class="col-xs-12 col-lg-12 titulo text-uppercase text-center">
                                <?php echo $tip->titulo; ?>
                            </div>
                            <div class="col-xs-12 col-lg-12 descripcionCorta">
                                <?php echo $tip->descripcionCorta; ?>
                            </div>
                            <div class="col-xs-12 col-lg-12 leer">
                                <a href="http://adf.ly/7122092/<?php echo $tip->link?>">
                                    <button class="btn btn-info pull-right col-xs-12 col-lg-6">
                                      Ver tip
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-xs-12 col-lg-12">
                        <?php echo $this->pagination->create_links();?>
                    </div>
                </div>
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 articulo">

              <div class="envolturaBanner">
                  <div class="imagenBanner">
                      <a href="https://huguidugui.wordpress.com/" target="_blank">
                          <img class="img-responsive" src="<?php echo base_url()?>assets/images/tips/huguidugui.jpg">
                      </a>
                  </div>
                  <div class="col-xs-12 col-lg-12 tituloBanner">
                     <p style="padding: 3px 0">Lo que he aprendido de programación web lo tengo en mi blog</p>
                     <p style="padding: 3px 0">Compartir y difundir para engrandecer el conocimiento</p>
                  </div>
                  <div class="col-xs-12 col-lg-12 leerBanner">
                      <a href="https://huguidugui.wordpress.com/" target="_blank">
                          <button class="btn btn-info pull-right col-xs-12 col-lg-12">
                            Ver el blog :D
                          </button>
                      </a>
                  </div>
              </div>
          </div>
    </article>
</section>
