<header id="header" class="fixed-top <?php if(current_url() == base_url().'inicio' || current_url() == base_url() ) {echo 'header-transparent';}?> ">
  <div class="container">
    <div class="logo float-left">
      <a href="<?php echo base_url();?>">
        <img
          id="logotipo" 
          class="img-fluid" 
          src="<?php echo base_url();?>assets/img/huguidugui-logo.png" 
          alt="Hugui Dugui sitio web"
          title="Hugui Dugui sitio web"
          width="143"
          height="60"
          loading="lazy" />
      </a>
    </div>
    <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li class="<?php if(current_url() == base_url().'inicio' || current_url() == base_url() ) {echo 'active';}?>">
          <a href="<?php echo base_url(); ?>">
          <?php echo $this->lang->line('menu_inicio'); ?></a>
        </li>
        <li class="<?php if(current_url() == base_url().'curriculum' ) {echo 'active';}?>">
          <a href="<?php echo base_url();?>curriculum">
            <?php echo $this->lang->line('menu_cv'); ?>
          </a>
        </li>
        <li class="<?php if(current_url() == base_url().'servicios' ) {echo 'active';}?>">
          <a href="<?php echo base_url();?>servicios">
            <?php echo $this->lang->line('menu_servicios'); ?>
          </a>
        </li>
        <li class="<?php if(current_url() == base_url().'blog' ) {echo 'active';}?>">
          <a href="<?php echo base_url();?>blog">
          <?php echo $this->lang->line('menu_blog'); ?>
          </a>
        </li>
        <li class="<?php if(current_url() == base_url().'portafolio' ) {echo 'active';}?>">
          <a href="<?php echo base_url();?>portafolio">
            <?php echo $this->lang->line('menu_portafolio'); ?>
          </a>
        </li>
        <li class="<?php if(current_url() == base_url().'tienda' ) {echo 'active';}?>">
          <a href="<?php echo base_url();?>tienda">
            <?php echo $this->lang->line('menu_tienda'); ?>
          </a>
        </li>
        <li class="<?php if(current_url() == base_url().'contacto' ) {echo 'active';}?>">
          <a href="<?php echo base_url();?>contacto">
            <?php echo $this->lang->line('menu_contacto'); ?>
          </a>
        </li>
        <li class="drop-down <?php if(current_url() == base_url().'lenguaje' ) {echo 'active';}?>">
            <a href="">
              <?php echo $this->lang->line('menu_interes'); ?>
            </a>
            <ul>
              <li class="<?php if(current_url() == base_url().'lenguaje' ) {echo 'active';}?>">
                <a href="<?php echo base_url();?>lenguaje">Lenguajes de programación</a>
              </li>
            </ul>
          </li>
        <li>
        <li> 
          <a class="<?php echo ($this->session->site_lang == "spanish") ? "active-flag" : "" ?>" 
             href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish"
             alt="Español">
            <img class="img-fluid" 
                 src="<?php echo base_url();?>assets/img/flag_spain.png" 
                 alt="Español" 
                 title="Español"
                 width="20"
                 height="12" 
                 loading="lazy"/>
          </a>
        </li>  
        <li> 
          <a class="<?php echo ($this->session->site_lang == "english") ? "active-flag" : "" ?>" 
             href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/english"
            alt="English">
            <img class="img-fluid" 
                 src="<?php echo base_url();?>assets/img/flag_gb.png" 
                 alt="English" 
                 title="English"
                 width="20"
                 height="12" 
                 loading="lazy"/>
          </a>
        </li>  
      </ul>
      <img
        id="logotipo" 
        class="img-fluid d-block d-sm-none d-block mx-auto" 
        src="<?php echo base_url();?>assets/img/huguidugui-logo.png" 
        alt="Hugui Dugui sitio web"
        title="Hugui Dugui sitio web"
        width="143"
        height="60"
        loading="lazy" />
    </nav>
  </div>
</header>