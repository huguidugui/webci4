<!-- Start latest news -->
<section id="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area">
          <h2 class="title">Tienda</h2>
          <span class="line"></span>
          <p><strong>Venta de garage y más</strong>. <br> Artículos en excelentes condiciones y/o nuevos a precios increíbles.</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="latest-news-content">
          <div class="row">
            <?php foreach ($productos as $producto) { ?>
                <div style="margin-bottom: 10px" class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                  <div class="card">
                    <?php if ($producto->vendido == 1) { ?>
                      <div class="vendido-imagen"> 
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/tienda/vendido.png"> 
                      </div>
                    <?php } ?>
                    <?php 
                       $vendido_sharp = '#';
                       $vendido_link = base_url() . 'tienda/articulo/' . $producto->identificador;
                    ?>
                    <a class="<?php echo ($producto->vendido == 1) ? 'vendido-link' : ''?>" href="<?php echo ($producto->vendido == 1) ? $vendido_sharp : $vendido_link; ?>">
                      <img src="<?php echo base_url();?>assets/images/tienda/principal/<?php echo $producto->foto_principal;?>" alt="Avatar" style="width:100%">
                    </a>
                    <div class="contenedor">
                      <h4 class="text-center"><?php echo $producto->articulo;?></h4>
                      <p class="text-center"><strong><?php echo '$ ' . $producto->precio;?></strong></p>
                      <?php if($producto->vendido == 0) { ?>
                      <a class="btn btn-danger col-md-6 col-xs-12" href="<?php echo base_url();?>tienda/articulo/<?php echo $producto->identificador?>">Ver +</a>
                      <a class="btn btn-danger col-md-6 col-xs-12" href="https://api.whatsapp.com/send?phone=525572882186&text=Quiero más información de este producto <?php echo base_url();?>tienda/articulo/<?php echo $producto->identificador?>" target="_blank">Más info por <i class="fa fa-whatsapp"></i></a>
                      <?php } else { ?>
                      <a class="btn btn-danger col-md-12 col-xs-12 vendido-link" href="#">Vendido</a>
                      <?php } ?>
                    </div>
                  </div> 
                </div>
            <?php } //End ForEach ?>
          </div>
        </div> <!-- col -->
      </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End latest news -->
