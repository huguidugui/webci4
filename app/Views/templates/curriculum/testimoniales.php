<section class="testimonials">
  <div class="container">

    <div class="section-title">
      <h2>Testimoniales</h2>
      <p>Algunas de las personas que conocen mi trabajo o que me conocen personalmente me han hecho un comentario que les comparto en esta sección</p>
    </div>

    <div class="owl-carousel testimonials-carousel">

      <?php foreach($testimoniales as $testimonial) { ?>

        <div class="testimonial-item">
          <img src="assets/img/testimonials/<?php echo $testimonial['gender']; ?>" class="testimonial-img" alt="">
          <h3><?php echo $testimonial['nombre']; ?></h3>
          <h4><?php echo $testimonial['puesto']; ?></h4>
          <div class="row justify-content-center">
            <div class="col-4 d-flex justify-content-around redes-testimonial">
              <?php echo $testimonial['redes']; ?>
            </div>
          </div>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <?php echo $testimonial['comentario']; ?>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>

      <?php } ?>

    </div>
  </div>
</section>