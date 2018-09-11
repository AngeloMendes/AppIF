<?php echo form_open('imagemfrase/edit/'.$imagemfrase['idImagemFrase'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label">Titulo</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo ($this->input->post('titulo') ? $this->input->post('titulo') : $imagemfrase['titulo']); ?>" class="form-control" id="titulo" />
		</div>
	</div>
	<div class="form-group">
		<label for="imagem" class="col-md-4 control-label">Imagem</label>
		<div class="col-md-8">
			<input type="text" name="imagem" value="<?php echo ($this->input->post('imagem') ? $this->input->post('imagem') : $imagemfrase['imagem']); ?>" class="form-control" id="imagem" />
		</div>
	</div>
	<div class="form-group">
		<label for="video" class="col-md-4 control-label">Video</label>
		<div class="col-md-8">
			<input type="text" name="video" value="<?php echo ($this->input->post('video') ? $this->input->post('video') : $imagemfrase['video']); ?>" class="form-control" id="video" />
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $imagemfrase['descricao']); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase1" class="col-md-4 control-label">Frase1</label>
		<div class="col-md-8">
			<input type="text" name="frase1" value="<?php echo ($this->input->post('frase1') ? $this->input->post('frase1') : $imagemfrase['frase1']); ?>" class="form-control" id="frase1" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase2" class="col-md-4 control-label">Frase2</label>
		<div class="col-md-8">
			<input type="text" name="frase2" value="<?php echo ($this->input->post('frase2') ? $this->input->post('frase2') : $imagemfrase['frase2']); ?>" class="form-control" id="frase2" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase3" class="col-md-4 control-label">Frase3</label>
		<div class="col-md-8">
			<input type="text" name="frase3" value="<?php echo ($this->input->post('frase3') ? $this->input->post('frase3') : $imagemfrase['frase3']); ?>" class="form-control" id="frase3" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase4" class="col-md-4 control-label">Frase4</label>
		<div class="col-md-8">
			<input type="text" name="frase4" value="<?php echo ($this->input->post('frase4') ? $this->input->post('frase4') : $imagemfrase['frase4']); ?>" class="form-control" id="frase4" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase5" class="col-md-4 control-label">Frase5</label>
		<div class="col-md-8">
			<input type="text" name="frase5" value="<?php echo ($this->input->post('frase5') ? $this->input->post('frase5') : $imagemfrase['frase5']); ?>" class="form-control" id="frase5" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase6" class="col-md-4 control-label">Frase6</label>
		<div class="col-md-8">
			<input type="text" name="frase6" value="<?php echo ($this->input->post('frase6') ? $this->input->post('frase6') : $imagemfrase['frase6']); ?>" class="form-control" id="frase6" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase7" class="col-md-4 control-label">Frase7</label>
		<div class="col-md-8">
			<input type="text" name="frase7" value="<?php echo ($this->input->post('frase7') ? $this->input->post('frase7') : $imagemfrase['frase7']); ?>" class="form-control" id="frase7" />
		</div>
	</div>
	<div class="form-group">
		<label for="frase8" class="col-md-4 control-label">Frase8</label>
		<div class="col-md-8">
			<input type="text" name="frase8" value="<?php echo ($this->input->post('frase8') ? $this->input->post('frase8') : $imagemfrase['frase8']); ?>" class="form-control" id="frase8" />
		</div>
	</div>
	<div class="form-group">
		<label for="fraseCorreta" class="col-md-4 control-label">FraseCorreta</label>
		<div class="col-md-8">
			<input type="text" name="fraseCorreta" value="<?php echo ($this->input->post('fraseCorreta') ? $this->input->post('fraseCorreta') : $imagemfrase['fraseCorreta']); ?>" class="form-control" id="fraseCorreta" />
		</div>
	</div>
	<div class="form-group">
		<label for="idLicao" class="col-md-4 control-label">IdLicao</label>
		<div class="col-md-8">
			<input type="text" name="idLicao" value="<?php echo ($this->input->post('idLicao') ? $this->input->post('idLicao') : $imagemfrase['idLicao']); ?>" class="form-control" id="idLicao" />
		</div>
	</div>
	<div class="form-group">
		<label for="ordem" class="col-md-4 control-label">Ordem</label>
		<div class="col-md-8">
			<input type="text" name="ordem" value="<?php echo ($this->input->post('ordem') ? $this->input->post('ordem') : $imagemfrase['ordem']); ?>" class="form-control" id="ordem" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>