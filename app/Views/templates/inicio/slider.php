<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?php echo $this->lang->line('inicio_slider1_title'); ?> :)</h2>
          <p class="animate__animated animate__fadeInUp">
            <?php echo $this->lang->line('inicio_slider1_texto'); ?>
          </p>
          <a href="<?php echo base_url();?>curriculum" class="btn-get-started">
            <?php echo $this->lang->line('inicio_slider1_boton'); ?>
          </a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?php echo $this->lang->line('inicio_slider2_title'); ?></h2>
          <p class="animate__animated animate__fadeInUp">
            <?php echo $this->lang->line('inicio_slider2_texto'); ?>
          </p>
          <a href="<?php echo base_url();?>blog" class="btn-get-started animate__animated animate__fadeInUp">
            <?php echo $this->lang->line('inicio_slider2_boton'); ?>
          </a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?php echo $this->lang->line('inicio_slider3_title'); ?></h2>
          <p class="animate__animated animate__fadeInUp"> 
            <?php echo $this->lang->line('inicio_slider3_texto'); ?>
          </p>
          <a href="<?php echo base_url();?>servicios" class="btn-get-started animate__animated animate__fadeInUp">
            <?php echo $this->lang->line('inicio_slider3_boton'); ?>
          </a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
</section>