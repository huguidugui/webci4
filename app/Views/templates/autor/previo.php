
 <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
          	<h2 style="color: #000;">PREVIO DE ARTÍCULO</h2>
            <div class="row">
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single sombra-tarjeta">
                    <div class="blog-news-img">
                      <img src="<?php echo base_url();?>assets/images/blog/<?php echo $entrada[0]->imagen;?>" alt="<?php echo $entrada[0]->alt;?>">
                    </div>
                    <div class="blog-news-title">
                      <h2><?php echo $entrada[0]->titulo;?></h2>
                      <p>
                        <span class="blog-author"> 
                          <a href="<?php echo base_url()?>inicio/perfil"><i class="fa fa-user"></i>Hugui Dugui</a>
                        </span> <span class="blog-date"></span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <?php echo htmlspecialchars_decode(stripslashes($entrada[0]->texto));?>
                    </div>
                  </article>                  
                </div>
              </div>
              <div class="col-md-4">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>