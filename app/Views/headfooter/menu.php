<header id="header" class="fixed-top <?php if(current_url() == base_url().'inicio' || current_url() == base_url() ) {echo 'header-transparent';}?> ">
  <div class="container">
    <div class="logo float-left">
      <a href="<?php echo base_url();?>">
        <img
          id="logotipo" 
          class="img-fluid" 
          src="<?php echo base_url();?>/public/assets/img/huguidugui-logo.png" 
          alt="Hugui Dugui sitio web"
          title="Hugui Dugui sitio web"
          width="143"
          height="60"
          loading="lazy">
      </a>
    </div>
    <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li class="active">
          <a href="<?php echo base_url(); ?>">
          <?php echo lang('Web.menu_inicio'); ?></a>
        </li>
        <li class="active">
          <a href="<?php echo base_url(); ?>/contacto">
          <?php echo lang('Web.menu_contacto'); ?></a>
        </li>
        <li> 
          <a  
             href="<?php echo base_url(); ?>/es"
             alt="Español">
            <img class="img-fluid" 
                 src="<?php echo base_url();?>/public/assets/img/flag_spain.png" 
                 alt="Español" 
                 title="Español"
                 width="20"
                 height="12" 
                 loading="lazy"/>
          </a>
        </li>  
        <li> 
          <a 
             href="<?php echo base_url(); ?>/en"
            alt="English">
            <img class="img-fluid" 
                 src="<?php echo base_url();?>/public/assets/img/flag_gb.png" 
                 alt="English" 
                 title="English"
                 width="20"
                 height="12" 
                 loading="lazy"/>
          </a>
        </li>  
      </ul>
      <
    </nav>
  </div>
</header>