
<input type="hidden" id="baseurl" value="<?php echo base_url();?>" />
<input type="hidden" id="next" value="0" />

<div id="latest-news">
    <section  class="container">
        <article class="row">
            <div class="col-md-12">
              <div class="title-area">
                <h2 class="title">Biblioteca</h2>
                <span class="line"></span>
                <p>Algunos de los libros en pdf que han sido parte de mi aprendizaje. El link te lleva a descripción completa.</p>
              </div>
            </div>
            <div class="col-md-12">
              <div id="post-data" class="latest-news-content">
                  <div class="row">
                      <?php foreach($libros as $libro){ ?>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <div class="card horizontal wow zoomIn">
                                  <div class="card-image">
                                    <img src="<?php echo base_url();?>assets/images/libros/<?php echo $libro->imagen;?>.jpg">
                                  </div>
                                  <div class="card-stacked">
                                    <div class="card-content">
                                      <p><?php echo $libro->descripcion?></p>
                                    </div>
                                    <div class="card-action text-center">
                                      <a href="<?php echo $libro->link?>">Ver detalle</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                      <?php } ?>
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-12 text-center">
              <button type="button" id="cargar-mas" name="cargar-mas">
                  Cargar más
              </button>
              <input type="hidden" name="siguiente" id="siguiente" value="0">
              <input type="hidden" name="bandera" id="bandera" value="mas">
            </div>

            <!-- <div style="display:none; font-size: 18px; border: 1px solid #59316f" id="todos" class="col-md-12 text-center">Todos los libros</div> -->
        </article>
    </section>
</div>
