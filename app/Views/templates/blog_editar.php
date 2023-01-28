<div id="latest-news">
    <section  class="container">
        <article class="row">
            <div class="col-md-12">
            	<?php
					$attributes = array('id' => 'form_register', 'role' => 'form', 'class' => 'form-horizontal');
					echo form_open('autor1551/guardarArticuloEditar', $attributes);
				?>
					<input type="hidden" name="id_nota" value="<?php echo $entrada[0]->id?>">
					<div class="form-group">
					    <label class="control-label col-sm-2" for="email">Título:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_titulo" name="txt_titulo" value="<?php echo $entrada[0]->titulo;?>" placeholder="Título entrada">
					      <?php echo form_error('txt_titulo');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Identificador:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_identificador" name="txt_identificador" value="<?php echo $entrada[0]->identificador;?>" placeholder="Ej. identficador-de-entrada">
					      <?php echo form_error('txt_identificador');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Descripción corta:<span id="contador-letras"></span></label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_descripcion_corta" name="txt_descripcion_corta" value="<?php echo $entrada[0]->descripcion_corta;?>" placeholder="Ej. identficador-de-entrada">
					      <?php echo form_error('txt_descripcion_corta');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Entrada:</label>
					    <div class="col-sm-10">
					      <textarea id="summernote" name="txt_editordata"><?php echo $entrada[0]->texto;?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Imagen:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_imagen" name="txt_imagen" value="<?php echo $entrada[0]->imagen;?>" placeholder="Ej. nombreImagen.jpg">
					      <?php echo form_error('txt_imagen');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Alt imagen:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_alt_imagen" name="txt_alt_imagen" value="<?php echo $entrada[0]->alt;?>" placeholder="alt de imagen">
					      <?php echo form_error('txt_alt_imagen');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">SEO:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_seo" name="txt_seo" value="<?php echo $entrada[0]->descripcion_seo;?>" placeholder="Descripción de SEO">
					      <?php echo form_error('txt_seo');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Fecha:</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="txt_fecha" name="txt_fecha" value="<?php echo $entrada[0]->fecha;?>" placeholder="Fecha">
					      <?php echo form_error('txt_fecha');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Tags:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txt_tags" name="txt_tags" value="<?php echo $entrada[0]->tags;?>" placeholder="Tags para key words">
					      <?php echo form_error('txt_tags');?>
				    	</div>
				    </div>
				    <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Estado:</label>
					    <div class="col-sm-10">
						    <select id="estado" name="estado" class="form-control">
		                        <option value="s" <?php echo ($entrada[0]->estado == 's') ? 'selected' : '';?>>Activo</option>
		                        <option value="n" <?php echo ($entrada[0]->estado == 'n') ? 'selected' : '';?>>Desactivo</option>
	                      	</select>
				    	</div>
				    </div>

					<input type="submit" name="enviar" value="Enviar">
				</form>
            </div>
        </article>
    </section>
</div>