<section id="pricing-table">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-area">
          <h2 class="title">Webs Amigas</h2>
          <span class="line"></span>
          <p>
            Visita estos sitios web interesantes.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- *************************** -->
<!-- Imagen chica 330 × 220      -->
<!-- Imagen grande 600 × 430     -->
<!-- *************************** -->
  
  <!-- Start portfolio -->
  <section id="portfolio">
    <div class="portfolio-area">     
       <!-- Portfolio container -->
       <div class="portfolio-container">
         <?php foreach($websAmigas as $web){?>
           <div class="single-portfolio">
             <div class="single-item">
               <img src="<?php echo base_url();?>assets/images/websAmigas/<?php echo $web->imagen_chica?>" alt="<?php echo $web->titulo?>">
               <div class="single-item-content">               
                  <a class="view-icon" href="#"><i class="fa fa-search-plus"></i></a>
                  <div class="portfolio-title">
                    <h4><?php echo $web->titulo?></h4>
                    <span><?php echo $web->tipo?></span>
                  </div>
                  <div class="portfolio-detail">
                      <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
                      <img src="<?php echo base_url();?>assets/images/websAmigas/<?php echo $web->imagen_grande?>" alt="<?php echo $web->titulo?>" />
                      <h2><?php echo $web->titulo?></h2>
                      <p><?php echo $web->descripcion?></p>
                      <a href="<?php echo $web->link;?>" target="_blank" class="view-project-btn">Visitar web :D</a>
                  </div>
               </div>
             </div>
           </div>
         <?php }?>
       </div>        
    </div>
  </section>
  <!-- End portfolio -->