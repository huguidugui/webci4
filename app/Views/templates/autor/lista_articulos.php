<section id="about" class="section">
	    <div class="container">
	        <h3 class="text-center"> Lista de artículo</h3>
	        <table class="table table-hover">
		        <thead>
		          <tr>
		             <th>Id</th>
		             <th>Titulo</th>
		             <th>Estado</th>
		             <th>Fecha</th>
		             <th></th>
		             <th></th>
		             <th></th>
		          </tr>
		        </thead>
		        <tbody>
		         	<?php foreach($articulos as $articulo) { ?>
		              <tr>
		                  <td><?php echo $articulo->id;?></td>
		                  <td><?php echo $articulo->titulo;?></td>
		                  <td><?php echo ($articulo->estado == "s") ? 'Publicado' : 'No publicado';?></td>
		                  <td><?php echo $articulo->fecha;?></td>
		                  <td>
		                      <a class="iconosTabla center-block editar" title="Editar nota" href="<?php echo base_url();?>autor1551/editarEntrada/<?php echo $articulo->id?>">
		                          <i class="fa fa-pencil" aria-hidden="true"></i>
		                      </a>
		                  </td>
		                  <td>
		                      <a class="iconosTabla center-block editar" title="Previo de entrada" href="<?php echo base_url();?>autor1551/previo/<?php echo $articulo->id?>" target="_blank">
		                          <i class="fa fa-eye" aria-hidden="true"></i>
		                      </a>
		                  </td>
		              </tr>
		          <?php } ?>
		        </tbody>
		    </table>
	    </div>
	</section>
