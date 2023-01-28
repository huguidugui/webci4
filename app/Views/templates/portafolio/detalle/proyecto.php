<section class="portfolio-details">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <?php foreach($slider as $slide) { ?>
                            <img 
                                src="<?php echo base_url()?>assets/img/portfolio/proyecto-detalle/<?php echo $detalle->carpeta_slider . '/' . $slide?>" 
                                class="img-fluid" 
                                alt="<?php echo $detalle->alt; ?>" 
                            />
                        <?php } ?>
                    </div>

                    <div class="portfolio-info">
                        <h3>Información del proyecto</h3>
                        <ul>
                            <li><strong>Tipo</strong>: <?php echo $detalle->tipo;?></li>
                            <li><strong>Cliente</strong>: <?php echo $detalle->nombre;?></li>
                            <li><strong>URL Web</strong>: <a target="_blank" href="<?php echo $detalle->link;?>"> <?php echo $link_inside_a; ?> <i class="bx bx-link"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="portfolio-description">
                    <?php echo $detalle->texto;?>
                </div>
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- container -->
</section>

