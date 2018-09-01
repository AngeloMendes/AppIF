<?php echo form_open('dialogo/edit/'.$dialogo['idDialogo'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label">Titulo</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo ($this->input->post('titulo') ? $this->input->post('titulo') : $dialogo['titulo']); ?>" class="form-control" id="titulo" />
		</div>
	</div>
	<div class="form-group">
		<label for="imagem" class="col-md-4 control-label">Imagem</label>
		<div class="col-md-8">
			<input type="text" name="imagem" value="<?php echo ($this->input->post('imagem') ? $this->input->post('imagem') : $dialogo['imagem']); ?>" class="form-control" id="imagem" />
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $dialogo['descricao']); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	<div class="form-group">
		<label for="ordem" class="col-md-4 control-label">Ordem</label>
		<div class="col-md-8">
			<input type="text" name="ordem" value="<?php echo ($this->input->post('ordem') ? $this->input->post('ordem') : $dialogo['ordem']); ?>" class="form-control" id="ordem" />
		</div>
	</div>
	<div class="form-group">
		<label for="idLicao" class="col-md-4 control-label">IdLicao</label>
		<div class="col-md-8">
			<input type="text" name="idLicao" value="<?php echo ($this->input->post('idLicao') ? $this->input->post('idLicao') : $dialogo['idLicao']); ?>" class="form-control" id="idLicao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>