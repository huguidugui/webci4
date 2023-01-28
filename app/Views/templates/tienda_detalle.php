  <!-- Start blog archive -->
 <section id="blog-archive">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="blog-archive-area">
           <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8">
               <div class="blog-archive-left">
                 <!-- Start blog news single -->
                 <article class="blog-news-single">
                   <div class="blog-news-img">
                     <div class="row">
                       <div class="col-md-offset-3 col-md-6 carrusel-margen">
                         <ul id="carrusel">
                           <?php foreach ($carrusel as $id =>  $foto) { ?>
                             <li>
                               <a href="#slide<?php echo $id;?>">
                                 <img src="<?php echo base_url()?>assets/images/tienda/carrusel/<?php echo $foto;?>">
                               </a>
                             </li>
                             <?php }?>
                           </ul>
                       </div>
                     </div>

                   </div>
                   <div class="blog-news-title">
                     <h2><?php echo $detalles->articulo?></h2>
                     <p>
                       <a class="blog-author" href="#">
                         <?php echo ' $ ' . $detalles->precio;?>
                       </a>
                       <span class="blog-date">| <?php echo $detalles->estado;?></span></p>
                   </div>
                   <div class="blog-news-details blog-single-details">

                     <?php echo $detalles->descripcion_larga;?>
                     <?php echo $detalles->condiciones;?>
                   </div>

                 <!--   <div class="blog-news-details blog-single-details">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse1">Pago en línea rápido y seguro con PayU</a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="col-md-offset-1 col-md-10 no-padding">
                                Clicka el botón "Comprar ahora :D"
                              </div>
                              <div class="col-md-offset-1 col-md-10 no-padding">
                                1. Escribe tu nombre, mail y teléfono
                              </div>
                              <div class="col-md-offset-1 col-md-10 no-padding">
                                <img class="img-responsive" src="<?php echo base_url();?>assets/images/tienda/pago_1.png">
                              </div>
                              <div class="col-md-offset-1 col-md-10 no-padding">
                                2. Elige la forma de pago que más te agrade. Por ejemplo con tarjeta de débito o una línea de captura para pagar en la tienda de tu preferencia.
                              </div>
                              <div class="col-md-offset-1 col-md-10 no-padding">
                                <img class="img-responsive" src="<?php echo base_url();?>assets/images/tienda/pago_2.png">
                              </div>
                            </div>
                            <div class="panel-footer">
                              El pago con tarjeta te dirige a un formulario donde podrás poner tu <strong>información de forma segura</strong>. <br><br>
                              La línea de captura te genera un pdf que podrás pagar en la tienda de tu preferencia. (Con este método de pago hay una comisión para la tienda de entre $8 a $10 pesos)
                            </div>
                          </div>
                        </div>
                      </div> 
                   </div> -->
                 </article>
               </div>
             </div>
             <div class="col-md-2"></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End blog archive -->
<!--  -->
