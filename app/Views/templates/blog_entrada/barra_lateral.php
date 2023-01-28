<div class="col-lg-5">
   <div class="sidebar">
     <!--  <h3 class="sidebar-title">Search</h3>
      <div class="sidebar-item search-form">
         <form action="">
            <input type="text">
            <button type="submit"><i class="icofont-search"></i></button>
         </form>
      </div> -->
      <!-- End sidebar search formn-->
      
      <h3 class="sidebar-title">Más leídos :)</h3>
      <div class="sidebar-item recent-posts">

         <?php 
            foreach($relacionados as $relacionado ) { 
               $urlPost = base_url('blog/entrada/'.(( $relacionado->identificador != '') ? $relacionado->identificador : $relacionado->id));
         ?>
            <div class="post-item clearfix">
               <img src="<?php echo base_url();?>assets/img/blog/<?php echo $relacionado->imagen;?>" alt="<?php echo $relacionado->alt;?>">
               <h4>
                  <a href="<?php echo $urlPost; ?>">
                     <?php echo mb_strimwidth($relacionado->titulo, 0, 45, "...");?>
                  </a>
               </h4>
               <time datetime="<?php echo $relacionado->fecha; ?>"><?php echo $relacionado->fecha; ?></time>
            </div>
         <?php } ?>
      </div>

      <h3 class="sidebar-title">Conoce <a href="https://www.rastreator.mx" target="_blank">Rastreator.mx</a></h3>
      <div class="sidebar-item">
         <a href="https://www.rastreator.mx" target="_blank">
            <img class="img-fluid mx-auto d-block"
                 src="<?php echo base_url();?>assets/img/rastreator-mx.png" 
                 alt="RastreatorMX"
                 title="RastreatorMX"
                 width="300"
                 height="600"
                 loading="lazy"/>
         </a>
         <a class="btn btn-info w-100 mt-2 " href="https://www.rastreator.mx">
            <strong>Ir a Rastreator.mx >></strong>
         </a>
      </div>
     
   </div>
   <!-- End sidebar -->
</div>

