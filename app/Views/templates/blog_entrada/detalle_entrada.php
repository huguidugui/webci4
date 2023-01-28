<div class="col-lg-7 entries">
   <article class="entry entry-single">
      <div class="entry-img">
        <img 
            src="<?php echo base_url();?>assets/img/blog/<?php echo $entrada->imagen; ?>" 
            alt="<?php echo $entrada->alt; ?>" 
            class="img-fluid" 
        />
      </div>
      <h2 class="entry-title">
        <a 
            href="#">
            <?php echo $entrada->titulo; ?>
        </a>
      </h2>
      <div class="entry-meta">
         <ul>
            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Hugui Dugui</a></li>
            <!-- <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li> -->
           
         </ul>
      </div>
      <div class="entry-content">
        <?php echo htmlspecialchars_decode(stripslashes($entrada->texto));?>
      </div>
     
   </article>
   <!-- End blog entry -->
   
   
   <!-- End blog comments -->
</div>