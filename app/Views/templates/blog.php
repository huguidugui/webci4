<!-- Start Pricing table -->
<section id="our-team">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area">
          <h2 class="title">Blog</h2>
          <span class="line"></span>
          <p>De los temas que voy aprendiendo sobre la marcha del día a día, voy escribiendo en mi blog en forma de tutorial.</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="our-team-content">
          <div class="row">
            <?php foreach($articulos as $articulo){?>
                  <!-- Start single team member -->
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-team-member">
                     <div class="team-member-img">
                      <a href="<?php echo base_url();?>blog/entrada/<?php echo $articulo->identificador;?>">
                       <img src="<?php echo base_url()?>assets/images/blog/<?= $articulo->imagen?>" alt="<?php echo $articulo->alt;?>">
                      </a>
                     </div>
                     <div class="team-member-name">
                       <p><?php echo $articulo->titulo;?></p>
                     </div>
                     <div class="team-member-link">
                       <a href="<?php echo base_url();?>blog/entrada/<?php echo $articulo->identificador;?>">
                        Leer más...
                       </a>
                     </div>
                    </div>
                  </div>
                  <!-- Start single team member -->
            <?php }?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Pricing table -->
