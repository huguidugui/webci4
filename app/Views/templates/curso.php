<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Start latest news -->
<section id="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area">
          <h2 class="title">Curso de Codeigniter</h2>
          <span class="line"></span>
          <p>Curso básico de Codeigniter para conocer la estructura básica del framework. Como ejemplo se hará un sitio web estático. En el <a href="https://www.facebook.com/groups/245350209435906/?ref=group_browse_new">grupo de facebook</a> puedes intereactuar para aclarar dudas</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="latest-news-content">
          <div class="row">
            <?php foreach ($modulos as $modulo) { ?>
                <div class="col-md-4">
                  <article class="blog-news-single sombra-tarjeta wow fadeInLeft">
                    <div class="blog-news-img">
                      <a href="<?php echo $modulo->link;?>">
                        <img src="<?php echo base_url();?>assets/images/codeigniter/<?php echo $modulo->imagen?>" alt="image">
                      </a>
                    </div>
                    <div class="blog-news-title">
                      <h2>
                        <a href="<?php echo $modulo->link;?>">
                          <?php echo $modulo->titulo?>
                        </a>
                      </h2>
                    </div>
                    <div class="blog-news-details">
                      <p>
                          <?php echo $modulo->descripcion;?>
                      </p>
                      <a class="blog-more-btn" href="<?php echo $modulo->link?>">
                        Ver módulo 
                      <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                </div>
            <?php } ?>
          </div>
        </div> <!-- collll -->
      </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End latest news -->
