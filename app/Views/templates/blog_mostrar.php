
<input type="hidden" id="baseurl" value="<?php echo base_url();?>" />
<input type="hidden" id="next" value="0" />

<div id="latest-news">
    <section  class="container">
        <article class="row">
            <div class="col-md-12">
              <div class="title-area">
                <h2 class="title">Blog</h2>
                <span class="line"></span>
                <p></p>
              </div>
            </div>
            <div class="col-md-12">
              <div id="post-data" class="latest-news-content">
                  <div id="busqueda" class="row">
                      <?php 
                          foreach($entradas as $entrada){ 
                          $urlPost = base_url('blog/entrada/'.(( $entrada->identificador != '') ? $entrada->identificador : $entrada->id));

                        ?>
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article class="sombra-tarjeta blog-news-single wow fadeInLeft">
                              <div class="blog-news-img">
                                <a href="<?php echo $urlPost;?>">
                                  <img src="<?php echo base_url();?>assets/images/blog/<?php echo $entrada->imagen?>" alt="<?php echo $entrada->alt;?>">
                                </a>
                              </div>
                              <div class="blog-news-title">
                                <h2>
                                  <a 
                                    title="<?php echo $entrada->titulo;?>" 
                                    href="<?php echo $urlPost;?>">
                                    <?php echo mb_strimwidth($entrada->titulo, 0, 75, "...");?>
                                  </a>
                                </h2>
                                <p>
                                  
                                </p>
                              </div>
                              <div class="blog-news-details">
                                <p><?php echo mb_strimwidth(htmlspecialchars_decode($entrada->descripcion_corta), 0, 160, "...");?></p>
                                <a class="blog-more-btn" href="<?php echo $urlPost;?>">
                                  Leer más <i class="fa fa-long-arrow-right"></i>
                                </a>
                              </div>
                            </article>
                          </div>
                      <?php  } ?>
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-12 text-center">
              <span class="hide" id="cargar-mas">
                  Son todos :D
              </span>
              <input type="hidden" name="siguiente" id="siguiente" value="">
              <input type="hidden" name="bandera" id="bandera" value="mas">
            </div>
        </article>
    </section>
</div>
