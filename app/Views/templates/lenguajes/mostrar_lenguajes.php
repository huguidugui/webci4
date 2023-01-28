<input type="hidden" id="baseurl" value="<?php echo base_url();?>" />
<input type="hidden" id="next" value="0" />

<section class="contact" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <h2>Lenguajes de programación</h2>
            <p>
                Esta es una sección interactiva para mostrar información de algunos lenguajes de programación. <br />
                (Pronto tendrá más información y mejoras)
            </p>
        </div>

        <!-- Tarjeta Principal -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 offset-md-1 col-md-10">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="crazy-css d-flex align-items-center justify-content-center">
                                    <img id="logo-lenguaje"
                                         src="<?php echo base_url()?>assets/img/lenguajes/logo_php.png" 
                                         class="img-fluid"
                                         alt="PHP"
                                         title="Lenguaje PHP"
                                         width="200"
                                         height="200"
                                         loading="lazy" />

                                </div>
                                <!-- <div class="owl-carousel lenguajes-carousel portfolio-details-carousel">
                                    <div class="crazy-css">
                                        <img 
                                            src="<?php echo base_url()?>assets/img/lenguajes/logo_php3.png" 
                                            class="img-fluid"
                                            width="100"
                                            height="100"
                                            alt="bizmart" 
                                        />
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-6 d-flex align-self-center">
                                <div class="info-box w-100 border-dotted mb-0">
                                    <h3 id="nombre-lenguaje">PHP</h3>
                                    <p id="descripcion-lenguaje">                             
                                    </p>
                                    <p>
                                        <span>
                                            <strong>
                                                Creación:
                                            </strong>
                                            <span id="creacion-lenguaje">1991</span>
                                        </span>
                                        <br />
                                        <span>
                                            <strong>
                                                Antigüedad: 
                                            </strong>
                                            <span id="antiguedad-lenguaje">31</span><span> años</span>
                                        </span>
                                        <br />
                                        <span class="px-3">
                                            <strong>
                                                Autor(es): 
                                            </strong>
                                            <span id="autor-lenguaje">Rasmus Lerdorf</span>
                                        </span>
                                    </p>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="post-data" class="row">
                    <?php 
                        foreach($entradas as $entrada) { 
                    ?>
                        <div class="col-md-3">
                            <div class="info-box lenguaje"
                                 data-name-lenguaje="<?php echo $entrada->nombre; ?>" 
                                 data-id-lenguaje="<?php echo $entrada->id; ?>">
                                    <i class="bx bx-code"></i>
                                    <h3><?php echo $entrada->nombre; ?></h3>
                                    <p>
                                        
                                    </p>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <div id="spinner" class="spinner-border d-none" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

        <div id="son-todos-fin" class="row d-none">
            <div class="col-lg-12 text-center">
                <p class="text-primary h4">Son todos por ahora :D</p>
            </div>
        </div>

        
        <input type="hidden" name="siguiente" id="siguiente" value="">
        <input type="hidden" name="bandera" id="bandera" value="mas">
    </div>
</section>