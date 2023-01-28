<section class="section-bg team team-inicio" data-aos="fade-up" date-aos-delay="200">
    <div class="container">
        <div class="section-title">
            <h2>Blog</h2>
        </div>

        <div class="row">
            <?php foreach($articulos as $articulo) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <a href="<?php echo base_url();?>blog/entrada/<?php echo $articulo->identificador;?>">
                                <img 
                                    class="img-fluid" 
                                    src="<?php echo base_url()?>assets/img/blog/<?= $articulo->imagen ?>" 
                                    alt="<?= $articulo->alt ?>" 
                                />
                            </a>
                        </div>
                        <div class="member-info text-center">
                            <h4>
                                <a href="<?php echo base_url();?>blog/entrada/<?php echo $articulo->identificador;?>">
                                    <?php echo $articulo->titulo; ?>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>