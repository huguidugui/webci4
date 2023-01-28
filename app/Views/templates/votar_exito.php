<?php header('Refresh: 10; ' . base_url());?>
<!-- <script src='https://www.google.com/recaptcha/api.js'></script>  -->
<!-- Start Pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Muchas gracias por votar!</h2>
            <span class="line"></span>
            <p>
              Esperemos no equivocarnos xD
            </p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              <div class="col-xs-6 col-lg-3 text-center">
                <img class="img-responsive center-block img-candidato" src="<?php echo base_url();?>assets/images/candidatos/anaya.jpg"> 
                <p><?php echo $votos[2]->votos;?></p>
              </div>

              <div class="col-xs-6 col-lg-3 text-center">
                <img class="img-responsive center-block img-candidato" src="<?php echo base_url();?>assets/images/candidatos/amlo.jpg"> 
                <p><?php echo $votos[0]->votos;?></p>
              </div>

              <div class="col-xs-12 visible-xs">
                <hr>
              </div>
              <div class="col-xs-6 col-lg-3 text-center">
                <img class="img-responsive center-block img-candidato" src="<?php echo base_url();?>assets/images/candidatos/margarita.jpg"> 
                <p><?php echo $votos[3]->votos;?></p>
              </div>

              <div class="col-xs-6 col-lg-3 text-center">
                <img class="img-responsive center-block img-candidato" src="<?php echo base_url();?>assets/images/candidatos/meade.jpg"> 
                <p><?php echo $votos[1]->votos;?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->  

