<!-- Start Pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Encuesta</h2>
            <span class="line"></span>
            <p>
              
            </p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <?php echo form_open('inicio/votar_candidato', 'class="radio-panel"'); ?>                  
                  <div class="form-group text-center">
                      <label class="radio-inline text-center">
                        <input type="radio" id="amlo" value="amlo" name="votar">
                        <img width="100" class="img-responsive" src="<?php echo base_url();?>assets/images/candidatos/amlo.jpg">
                        AMLO
                      </label>
                      <label class="radio-inline text-center">
                        <input type="radio" id="meade" value="meade" name="votar">
                        <img width="100" class="img-responsive" src="<?php echo base_url();?>assets/images/candidatos/meade.jpg">
                        MEADE
                      </label>
                      <label class="radio-inline text-center">
                        <input type="radio" id="anaya" value="anaya" name="votar">
                        <img width="100" class="img-responsive" src="<?php echo base_url();?>assets/images/candidatos/anaya.jpg">
                        ANAYA
                      </label>
                      <label class="radio-inline text-center">
                        <input type="radio" id="margarita" value="margarita" name="votar">
                        <img width="100" class="img-responsive" src="<?php echo base_url();?>assets/images/candidatos/margarita.jpg">
                        MARGARITA
                      </label>
                      <?php echo form_error('votar');?>
                  </div>

                  <button id="registrar" class="btn miboton col-xs-12 col-sm-12 col-lg-12">
                        <i class="fa fa-angellist" aria-hidden="true"></i>
                        Votar candidato
                  </button>
            <?php echo form_close(); ?>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->  

