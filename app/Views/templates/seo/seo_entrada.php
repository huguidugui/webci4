<meta property="og:title" content="<?= $titulo?>" />
<meta property="og:url" content="<?php echo current_url()?>" />
<meta property="og:type" content="website"/>
<meta property="og:image" content="<?php echo base_url();?>assets/img/blog/<?php echo $imagen_seo;?>" />
<!-- Twitter Card data -->
<meta name="twitter:card" content="<?php echo base_url();?>assets/img/blog/<?php echo $imagen_seo;?>" />
<meta name="twitter:site" content="@huguidugui" />
<meta name="twitter:title" property="og:title" content="<?= $titulo?>" />
<meta name="twitter:description" property="og:description" content="<?php echo isset($descripcion_seo) ? $descripcion_seo : ''?>" />
<meta name="twitter:creator" content="@huguidugui" />
<meta name="twitter:image" content="<?php echo base_url();?>assets/img/blog/<?php echo $imagen_seo;?>" />