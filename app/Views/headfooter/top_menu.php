<!-- Start header -->
<header id="header">
    <?php 
      $controller = $this->router->fetch_class();
      $method = $this->router->fetch_method();
      if ($controller == 'blog' && $method == 'index') { ?>
		    <!-- BUSCADOR EN BLOG -->
		    <div class="header-top">
		      <div class="container">
		         <form  action="">
		            <input 
		            	type="hidden" 
		            	name="baseurl" 
		            	id="baseurl" 
		            	value="<?php echo base_url();?>"
		            />
		            <div id="search">
		               <input 
		               		type="text"  
		               		name="buscar" 
		               		id="m_search" 
		               		placeholder="Buscar un artículo del blog..." 
		               		style="display: inline-block;"
		               	/>
		                <button id="buscar-blog" type="submit">
		               		<i class="fa fa-search"></i>
		                </button>
		            </div>
		         </form>
		      </div>
		    </div>
   <?php } ?>
   
   <!-- TOP HEADER -->
   <div class="header-bottom">
      <div class="container">
         <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-7 col-lg-8">
               <div class="header-contact">
                  <ul>
                     <li>
                        <div class="phone">
                           <a class="link-wa-header" href="https://api.whatsapp.com/send?phone=525572882186">
                           		<i class="fa fa-whatsapp"></i>
                           		55 7288 2186 
                           		<span class="visible-xs"> 
                           			<i class="fa fa-arrow-right"></i>
                           			Envíame un mensaje
                           		</span>
                           </a>
                        </div>
                     </li>
                     <li>
                        <div class="mail">
                           <i class="fa fa-envelope"></i>
                           ringhugos@gmail.com
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- End header -->