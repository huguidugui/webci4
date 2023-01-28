<section class="portfolio-details team">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <?php foreach($carrusel as $foto) { ?>
                            <img 
                                src="<?php echo base_url()?>assets/img/tienda/carrusel/<?php echo $foto; ?>" 
                                class="img-fluid" 
                                alt="<?php echo $nombreArticulo_seo; ?>" 
                            />
                        <?php } ?>
                    </div>
                </div>
            </div> <!-- col -->

            <div class="col-12 col-lg-8">
                <h2 class="mb-1 mt-4 mt-lg-0"><?php echo $nombreArticulo_seo;?></h2>
                <h3 class="mb-3"><?php echo "$ " . $detalles->precio . " MX"; ?></h3>
                <p><?php echo $detalles->descripcion_larga; ?></p>
                <?php echo $zona_de_entrega; ?>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

    <div class="container mt-5">
        <div class="section-title">
            <h2 class="text-center">Productos relacionados</h2>
        </div>
        <div class="row">
            <?php foreach($productos_relacionados as $relacionado) { ?>
                <div class="col-6 col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?php echo base_url()?>assets/img/tienda/principal/<?php echo $relacionado->foto_principal?>" class="img-fluid">
                            <div class="d-flex flex-column justify-content-center align-items-center social">
                                <strong>$ <?php echo $relacionado->precio; ?></strong>
                                <a href="<?php echo base_url();?>tienda/articulo/<?php echo $relacionado->identificador; ?>" class="btn btn-success">Ver detalles</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4 class="text-center"><?php echo $relacionado->articulo; ?></h4>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


</section>
