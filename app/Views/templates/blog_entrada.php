 <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single sombra-tarjeta">
                    <div class="blog-news-img">
                      <img src="<?php echo base_url();?>assets/images/blog/<?php echo $entrada->imagen;?>" alt="<?php echo $entrada->alt;?>">
                    </div>
                    <div class="blog-news-title">
                      <h2><?php echo $entrada->titulo;?></h2>
                      <p>
                        <span class="blog-author"> 
                          <a href="<?php echo base_url()?>inicio/perfil"><i class="fa fa-user"></i>Hugui Dugui</a>
                        </span> <span class="blog-date"></span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <?php echo htmlspecialchars_decode(stripslashes($entrada->texto));?>
                    </div>
                  </article>                  
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Te puede interesar:</h4>
                    <?php 
                      foreach($relacionados as $relacionado){
                        $urlPost = base_url('blog/entrada/'.(( $relacionado->identificador != '') ? $relacionado->identificador : $relacionado->id));
                      ?>
                        <div class="row relacionados">
                          <div class="col-md-4">
                            <a title="<?php echo $relacionado->titulo;?>" href="<?php echo $urlPost;?>">
                              <img class="img-responsive" src="<?php echo base_url();?>assets/images/blog/<?php echo $relacionado->imagen;?>">
                            </a>
                          </div>
                          <div class="col-md-8 titulo">
                            <a title="<?php echo $relacionado->titulo;?>" href="<?php echo $urlPost;?>">
                              <?php echo mb_strimwidth($relacionado->titulo, 0, 45, "...");?>
                            </a>
                          </div>
                        </div>
                    <?php } ?>
                  </div>
          
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Curso Codeigniter</h4>
                    <p>
                      ¿Te gustaría crear un <strong>sitio web estático</strong> en Codeigniter? 
                      Con este curso básico puedes conocer el <strong>framework</strong>, el curso está diseñado para
                      ir paso a paso conociendo poco a poco la estructura y funcionalidades.
                      <br> Puedes ver las entradas aquí: 
                      <a class="link-en-entrada" href="<?php echo base_url();?>inicio/curso">Curso Codeigniter</a>

                    </p>
                    <p>
                      <a href="<?php echo base_url();?>inicio/curso">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/blog/curso_codeigniter.jpg">
                      </a>
                    </p>
                  </div>
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Grupo de facebook</h4>
                    <p>
                      Contamos con una comunidad activa donde puedes publicar tus avances, dudas y cometarios sobre el curso. <br>
                      El grupo se llama <a class="link-en-entrada" href="https://www.facebook.com/groups/245350209435906/">Curso Codeigniter ;)</a>

                    </p>
                    <p>
                      <a href="https://www.facebook.com/groups/245350209435906/">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/blog/grupo_facebook.png">
                      </a>
                    </p>
                  </div>
                  
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>