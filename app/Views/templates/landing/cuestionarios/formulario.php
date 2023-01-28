<script src='https://www.google.com/recaptcha/api.js'></script> 
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Contacto</h2>
            <span class="line"></span>
            <p>
              Con gusto leeré tu mensaje para proponerte una solución y cotizar tu proyecto.
            </p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <?php echo form_open('inicio/enviar_mail', 'class=""'); ?>
                  <div class="form-group">
                      <input type="text" value="<?php echo set_value('nombre');?>" class="form-control" id="nombre" name="nombre" placeholder="* Escribe tu nombre">
                      <?php echo form_error('nombre');?>
                  </div>
                  <div class="form-group">
                      <input type="text" value="<?php echo set_value('email');?>" class="form-control" id="email" name="email" placeholder="* Escribe tu e-mail">
                      <?php echo form_error('email');?>
                  </div>
                  <div class="form-group">
                      <select id="servicio" name="servicio" class="form-control">
                        <option value="basicoCuestionarios" <?php echo ($tipoPaquete == 1) ? 'selected' : '';?>>Paquete básico cuestionarios</option>
                        <option value="goldCuestionarios" <?php echo ($tipoPaquete == 2) ? 'selected' : '';?>>Paquete gold cuestionarios</option>
                      </select>
                  </div>
                  <div class="form-group">
                        <textarea class="form-control" name="mensaje" rows="4" id="comment" placeholder="* Escribe la idea que tienes"><?php echo set_value('email');?></textarea>
                        <?php echo form_error('mensaje');?>
                  </div>

                 <div class="form-group">
                      <div class="g-recaptcha" data-sitekey="6Lf5xAgUAAAAALtsx8vgfHW57z11XxrZ3YHwgtaD"></div>
                  </div>
                  <button id="registrar" class="btn miboton col-xs-12 col-sm-12 col-lg-12">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        Enviar mensaje
                  </button>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

